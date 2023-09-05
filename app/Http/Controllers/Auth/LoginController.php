<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // $token = auth()->user()->createToken('auth_token')->plainTextToken;

        auth('web')->attempt($validated);

        alert(__('Успешный вход'), 'success');

        return redirect()->route('user');
    }
}
