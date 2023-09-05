<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        auth('web')->logout();

        return redirect()->route('home');
    }
}
