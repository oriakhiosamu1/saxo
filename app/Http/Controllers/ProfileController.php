<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $user_details = auth()->user();
        return view('auth.profile', [
            'user' => $user_details
        ]);
    }

    public function update_profile(){
        $user_details = auth()->user();
        return view('auth.update_profile', [
            'user' => $user_details
        ]);
    }

    public function update(Request $request, User $user){
        if($user->id != auth()->id()){
            abort(403, 'Unauthorised User');
        }

        $formfield = $request->validate([
            'email' => 'required|email:filter',
            'country' => 'required',
            'mobile_number' => 'required',
            'plans' => 'nullable',
            'pin' => 'required',
            'profile_picture'=> 'nullable|image'
        ]);

        if($request->hasFile('profile_picture')){
            $formfield['profile_picture'] = $request->file('profile_picture')->store('profile', 'public');
        }

        $user->update($formfield);

        return redirect('profile')->with('message', 'Profile Updated');

    }
}
