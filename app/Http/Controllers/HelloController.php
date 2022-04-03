<?php

namespace App\Http\Controllers;


use App\Jobs\ExampleJob;
use Illuminate\Http\JsonResponse;

class HelloController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $value = ['test1234','test12345'];
        $value2 = $value;

        return response()
            ->json(['message' => 'Hello World','value' => $value2]);
    }
}
