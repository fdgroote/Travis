<?php
/**
 * Created by PhpStorm.
 * User: fdegroote
 * Date: 19/03/2018
 * Time: 10:51
 */

namespace Tests\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class PostControllerTest extends WebTestCase
{

    public function testShowPost()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}