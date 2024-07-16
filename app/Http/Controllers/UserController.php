<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Here you would probably fetch some data specific to the user and pass it to the view
        return view('user.dashboard');
    }
}
