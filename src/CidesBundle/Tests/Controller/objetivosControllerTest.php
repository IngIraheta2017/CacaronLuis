<?php

namespace CidesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class objetivosControllerTest extends WebTestCase
{
    public function testAgregarobjetivo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/agregarObjetivo');
    }

}
