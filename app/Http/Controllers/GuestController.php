<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function about(){
        return view('guest.about');
    }

    public function plans(){
        return view('guest.plan');
    }

    public function login(){
        return view('guest.login');
    }

    public function register(){
        return view('guest.register');
    }

}
