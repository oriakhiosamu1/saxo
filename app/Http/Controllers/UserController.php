<?php

namespace App\Http\Controllers;

use App\Events\UpgradePlanEvent;
use App\Models\Upgrade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        $username = Auth::user()->username;

        return view('auth.dashboard', [
            'username' => $username,
            'user' => auth()->user(),
        ]);
    }

    public function invest(){
        return view('auth.invest');
    }

    public function coincloud(){
        $user = auth()->user();
        return view('auth.coincloud', [
            'user' => $user
        ]);
    }

    public function bitpay(){
        $user = auth()->user();
        return view('auth.bitpay', [
            'user' => $user
        ]);
    }

    public function ethereum(){
        $user = auth()->user();
        return view('auth.ethereum', [
            'user' => $user
        ]);
    }

    public function dogecoin(){
        $user = auth()->user();
        return view('auth.dogecoin', [
            'user' => $user
        ]);
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

    public function transaction(){
        return view('auth.transactions');
    }

    public function upgrade_plan(){
        $user_id = auth()->id();
        $user_plan = auth()->user()->plans;
        $user_type = auth()->user()->account_type;
        return view('auth.upgrade_plan', [
            'plan' => $user_plan,
            'type' => $user_type,
            'id' => $user_id
        ]);
    }

    public function exchanger(){
        return view('auth.exchanger');
    }

    public function upgrade(Request $request, User $user){
        if($user->id != auth()->id()){
            abort(403, "Unauthorised User");
        }

        $formfield = $request->validate([
            'plan' => 'required',
            'type' => 'required',
        ]);

        $formfield['user_id'] = auth()->id();
        $formfield['status'] = 'Pending';
        $formfield['previous_plan'] = auth()->user()->plans;
        $formfield['previous_type'] = auth()->user()->account_type;

        Upgrade::create($formfield);

        event(new UpgradePlanEvent($user));

        return redirect()->back()->with('message', 'Upgrade Requested');

    }

}
