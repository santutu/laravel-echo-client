<?php

namespace Santutu\EchoClient;

use Santutu\LaravelEchoClient\EchoClient;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function testCanCreateInstance()
    {
        $client = new EchoClient('', '', '');
        $this->assertNotNull($client);
    }
}