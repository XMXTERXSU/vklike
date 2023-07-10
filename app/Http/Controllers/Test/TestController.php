<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        $response = response('Respons', 200, []);

        return $response;
    }
}
