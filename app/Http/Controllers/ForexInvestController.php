<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForexInvestController extends Controller
{
    public function invest(){
        return view('auth.forex_invest');
    }
}
