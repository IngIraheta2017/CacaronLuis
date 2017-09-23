<?php

namespace CidesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class proyectoControllerTest extends WebTestCase
{
    public function testAgregarproyecto()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/agregarProyecto');
    }

}
