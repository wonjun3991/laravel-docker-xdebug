<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function test_example()
    {
        $response = $this->getJson(route('hello'));
        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJson(['message' => 'Hello World']);
    }
}
