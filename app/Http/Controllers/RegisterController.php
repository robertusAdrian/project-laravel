<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store()
    {
        return request()->validate([
            'first_name' => 'max:225',
            'last_name'  => 'max:225',
        ]);
    }
}
