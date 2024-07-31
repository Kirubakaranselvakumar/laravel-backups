<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_form(){
        return '<h1>Login Form Page</h1>';
    }

    public function login_process(){
        return 'Login Processed';
    }

    public function forget_passwrod(){
        return 'Forget Password Form';
    }
}
