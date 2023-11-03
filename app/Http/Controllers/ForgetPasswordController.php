<?php

namespace App\Http\Controllers;

use App\Events\PasswordEvent;
use App\Models\User;
// use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function forget(Request $request){
        // if($user->id != auth()->id()){
        //     abort(403, "UNAUTHORIZED ACCESS");
        // }

        $email = $request->validate([
            'email' => 'required|email:filter'
        ]);

        event(new PasswordEvent($email));

        return redirect()->back()->with('message', 'Check your mail');
    }

    public function reset_password(){
        $user = auth()->id();
        return view('guest.reset_password', [
            'user' => $user
        ]);
    }

    public function reset(User $user){
        if($user->id != auth()->id()){
            abort(403, "UNAUTHORIZED ACCESS");
        }
        $formField = request()->validate([
            'password' => 'required|confirmed'
        ]);

        $formField['password'] = bcrypt($formField['password']);

        $user->update($formField);

        return redirect()->route('success');
    }

    public function success(){
        return view('guest.success');
    }
}
