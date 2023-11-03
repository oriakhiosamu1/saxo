<?php

namespace App\Http\Controllers;

use App\Models\invest;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function dashboard(){
        $user = User::all();

        return view('admin.dashboard', [
            'users' => $user
        ]);
    }

    public function profile(User $user){

        return view('admin.profile', [
            'user' => $user,
        ]);
    }

    public function balance(User $user){
        return view('admin.balance', [
            'user' => $user
        ]);
    }

    public function cryptoInvest(){
        $crypto = invest::all();

        return view('admin.cryptoInvest', [
            'cryptocurrency' => $crypto
        ]);
    }

    public function balanceUpdate(User $user, Request $request){
        $formfield = $request->validate([
            'balance' => 'nullable',
            'deposit' => 'nullable',
            'ref_bonus' => 'nullable',
            'profit' => 'nullable',
        ]);

        $user->update($formfield);

        return redirect()->back()->with('message', 'Balance have been updated');
    }
}
