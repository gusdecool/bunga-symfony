<?php

namespace Bunga\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/core');
        $this->assertTrue($crawler->filter('html:contains("Hello")')->count() > 0);
    }
}