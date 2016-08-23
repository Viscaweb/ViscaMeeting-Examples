<?php

namespace TestCatchExpirationDate;

use GuzzleHttp\Client;

class Test extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $url = 'http://localhost:8989/TestCatchExpirationDate/EntryPoint.php';

        $client = new Client();

        $response = $client->get($url);
        $this->assertEquals('Miss', $response->getHeader('X-Cache')[0]);

        $response = $client->get($url);
        $this->assertEquals('Hit', $response->getHeader('X-Cache')[0]);
    }
}