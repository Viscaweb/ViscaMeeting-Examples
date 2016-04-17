<?php
function createRandomIp(){
    $blocks = [85, 105, 205, 244];
    shuffle($blocks);
    $firstBlock = reset($blocks);

    return $firstBlock.'.'.mt_rand(1, 255).'.'.mt_rand(1, 255).'.'.mt_rand(1, 255);
}

function createDate($offset){
    $timestamp = time() + 60 * $offset;
    return date('j/M/Y:H:i:s O', $timestamp);
}

function createFakeApacheLine($lineId){
    $ip = createRandomIp();
    $date = createDate($lineId);
    $method = mt_rand(0, 1) ? 'GET' : 'POST';
    return "$ip - - [$date] \"$method /index.php\" HTTP/1.1 200";
}

$logFile = '/tmp/fake-apache.log';
print "The log will be created at this location: $logFile\n"; flush();

$counter = 0;
while (1){
    print "\n→ Inserting new line ($counter)";
    file_put_contents($logFile, createFakeApacheLine($counter)."\n", FILE_APPEND);
    sleep (1); flush();
    $counter++;
}
