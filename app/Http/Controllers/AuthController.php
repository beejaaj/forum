<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginUser() {
        return view('login.loginUser');
    }

    public function logoutUser() {
        return view("logout.logoutUser");
    }
}
