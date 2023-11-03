<?php

namespace App\Http\Controllers;

use App\Events\WelcomeMailEvent;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    //Register function
    public function register(Request $request){
        $formField = $request->validate([
            'name' => 'required|unique:users',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email:filter',
            'password' =>'required|min:6|max:20|confirmed',
            'account_type' => 'required',
            'payment_option' => 'required',
            'plans' => 'required',
            'mobile_number' => 'required|min:10|max:15',
            'country' => 'required',
            'pin' => 'nullable',
            'profile_picture' => 'nullable',
            'referral_link' => 'nullable',
        ]);

        $formField['password'] = bcrypt($formField['password']);
        $formField['isAdmin'] = false;

        $user = User::create($formField);

        event(new WelcomeMailEvent($user));

        auth()->login($user);

        return redirect('dashboard')->with('message', 'Accounted created');
    }

    //The login function
    public function login(Request $request){
        $formField = $request->validate([
            'username'=> 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formField)){
            $request->session()->regenerate();

            if(auth()->user()->isAdmin == true){
                return redirect('admin_dashboard')->with('message', 'You are now logged in');
            }
            return redirect('dashboard')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['username' => 'invalid credentials'])->onlyInput('email');

    }

    public function password(){
        $user = auth()->user();
        return view('guest.forget_password', [
            'user' => $user,
        ]);
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You are now logged out');
    }


}
