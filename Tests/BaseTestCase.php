<?php

namespace SN\RequestParamBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BaseTestCase extends WebTestCase
{
    public function setUp()
    {
        date_default_timezone_set("Europe/Berlin");
    }

}