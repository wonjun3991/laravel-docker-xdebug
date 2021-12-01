<?php

namespace App\Http\Controllers;


use App\Jobs\ExampleJob;
use Illuminate\Http\JsonResponse;

class HelloController extends Controller
{
    public function __invoke(): JsonResponse
    {
        ExampleJob::dispatch();

        return response()
            ->json(['message' => 'Hello World']);
    }
}
