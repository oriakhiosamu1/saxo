<?php

namespace App\Http\Controllers;

use App\Models\invest;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function coincloud(Request $request, User $user){
        $formfield = $request->validate([
            'amount' => 'required',
            'proof' => 'required|file|image'
        ]);

        if($request->hasFile('proof')){
            $formfield['proof'] = $request->file('proof')->store('proof', 'public');
        }

        $formfield['user_id'] = auth()->id();
        $formfield['type'] = 'USDT';
        $formfield['username'] = $user->username;
        $formfield['email'] = $user->email;

        invest::create($formfield);
        $user->update([
            'deposit' => $request->amount,
            'balance' => $request->amount,
            'paid_with' => 'USDT'
        ]);

        return redirect()->back()->with('message', 'Proof of Payment received');
    }

    public function bitcoin(Request $request, User $user){
        $formfield = $request->validate([
            'amount' => 'required',
            'proof' => 'required|file|image'
        ]);

        if($request->hasFile('proof')){
            $formfield['proof'] = $request->file('proof')->store('proof', 'public');
        }

        $formfield['user_id'] = auth()->id();
        $formfield['type'] = 'BTC';
        $formfield['username'] = $user->username;
        $formfield['email'] = $user->email;

        invest::create($formfield);
        $user->update([
            'deposit' => $request->amount,
            'balance' => $request->amount,
            'paid_with' => 'BTC'
        ]);

        return redirect()->back()->with('message', 'Proof of Payment received');
    }

    public function ethereum(Request $request, User $user){
        $formfield = $request->validate([
            'amount' => 'required',
            'proof' => 'required|file|image'
        ]);

        if($request->hasFile('proof')){
            $formfield['proof'] = $request->file('proof')->store('proof', 'public');
        }

        $formfield['user_id'] = auth()->id();
        $formfield['type'] = 'ETH';
        $formfield['username'] = $user->username;
        $formfield['email'] = $user->email;

        invest::create($formfield);
        $user->update([
            'deposit' => $request->amount,
            'balance' => $request->amount,
            'paid_with' => 'ETH'
        ]);

        return redirect()->back()->with('message', 'Proof of Payment received');
    }

    public function dogecoin(Request $request, User $user){
        $formfield = $request->validate([
            'amount' => 'required',
            'proof' => 'required|file|image'
        ]);

        if($request->hasFile('proof')){
            $formfield['proof'] = $request->file('proof')->store('proof', 'public');
        }

        $formfield['user_id'] = auth()->id();
        $formfield['type'] = 'DOGE';
        $formfield['username'] = $user->username;
        $formfield['email'] = $user->email;

        invest::create($formfield);
        $user->update([
            'deposit' => $request->amount,
            'balance' => $request->amount,
            'paid_with' => 'DOGE'
        ]);

        return redirect()->back()->with('message', 'Proof of Payment received');
    }


}
