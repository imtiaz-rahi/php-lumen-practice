<?php

/**
 * Class AuthorControllerTest
 * @author Imtiaz Rahi
 * @since 2022-11-10
 * @see https://lumen.laravel.com/docs/5.7/testing
 * @see https://medium.com/@stephenjudeso/testing-lumen-api-with-phpunit-tests-555835724b96
 */
class AuthorControllerTest extends TestCase
{
    private const API_URL = "/api/authors";

    public function testCreate()
    {
        $res = $this->json('POST', self::API_URL, ['name' => 'Sally']);
        $res->seeJson(['created' => true]);
    }

    public function testList()
    {
        print($this->get(self::API_URL)->count());
    }

}
