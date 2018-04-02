<?php

namespace SN\RequestParamBundle\Tests\Request;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControllerTest extends WebTestCase
{
    public function testId()
    {
        $client = static::createClient();

        $client->request("GET",'/test/test');

        $this->assertEquals(400, $client->getResponse()->getStatusCode());
    }
}