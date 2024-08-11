<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function show(Request $Request)
    {
        $validated = $Request->validate([
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'max:20', 'min:6']
        ]);
        dd($validated);
    }
}
