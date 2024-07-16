<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        Log::info('User Type: ' . $user->usertype);

        if ($user && $user->usertype === 'admin') {
            return view('admin.dashboard');
        } elseif ($user) {
            return view('user.dashboard');
        } else {
            return redirect('/login');
        }
    }
}

