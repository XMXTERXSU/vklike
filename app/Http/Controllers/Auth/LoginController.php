<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function store(Request $request){
        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();

        if (true) {
            return redirect()->back()->withInput();
        }

        // return redirect()->route('user');
    }
}
