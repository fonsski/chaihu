<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function register()
    {
        return view('user.register');
    }

    public function show(Request $Request)
    {
        $validated = $Request->validate([
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'max:20', 'min:8']
        ]);
        dd($validated);
    }
    public function auth(){
        return view('user.auth');
    }
}
