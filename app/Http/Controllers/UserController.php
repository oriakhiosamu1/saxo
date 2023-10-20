<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        $username = Auth::user()->username;
        return view('auth.dashboard', [
            'username' => $username,
        ]);
    }

    public function invest(){
        return view('auth.invest');
    }

    public function coincloud(){
        return view('auth.coincloud');
    }

    public function bitpay(){
        return view('auth.bitpay');
    }

    public function ethereum(){
        return view('auth.ethereum');
    }

    public function dogecoin(){
        return view('auth.dogecoin');
    }

    public function method(){
        return view('auth.withdraw_method');
    }

    public function withdraw(){
        return view('auth.withdraw');
    }

    public function bank(){
        return view('auth.bank_withdraw');
    }

}
