<?php
// Here is your reverse proxy

namespace TestCatchExpirationDate;

use GuzzleHttp\Client;

require '../../vendor/autoload.php';

$url = 'http://127.0.0.1:4444' . $_SERVER['REQUEST_URI'];
$cacheTmp = sys_get_temp_dir().'/reverse-proxy-' . md5($url);

$cacheableModel = null;
if (file_exists($cacheTmp)) {
    /** @var CacheableModel $cacheableModel */
    $cacheableModel = unserialize(require $cacheTmp);

    $expiresAt = $cacheableModel->getExpiresAt();
    $now = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

    if ($expiresAt >= $now){
        $cacheHit = 'Hit';
    }
}

if ($cacheableModel === null) {
    $client = new Client();
    $response = $client->get($url);

    $headers = $response->getHeaders();
    $cacheControl = $headers['Cache-Control'][0];
    $expires = $headers['Expires'][0];
    unset($headers['Cache-Control'], $headers['Expires']);

    if ($cacheControl === 'public') {
        $expirationDate = new \DateTimeImmutable($expires, new \DateTimeZone('UTC'));
        $cacheableModel = new CacheableModel(
            $headers,
            $response->getBody()->getContents(),
            $expirationDate
        );
        file_put_contents(
            $cacheTmp,
            '<?php return ' . var_export(serialize($cacheableModel), true).';'
        );
    }

    $cacheHit = 'Miss';
}
foreach($cacheableModel->getHeaders() as $name => $values){
    foreach ($values as $value){
        header("$name: $value");
    }
}
header("X-Cache: $cacheHit");

echo $cacheableModel->getBody();


