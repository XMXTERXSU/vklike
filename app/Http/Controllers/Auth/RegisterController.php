<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        dd($data);

        return "Запрос на регистрацию";
    }
}
