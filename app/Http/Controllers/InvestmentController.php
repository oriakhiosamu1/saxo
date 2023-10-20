<?php

namespace App\Http\Controllers;

use App\Models\invest;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function coincloud(Request $request){
        $formfield = $request->validate([
            'amount' => 'required',
            'proof' => 'required|file|image'
        ]);

        if($request->hasFile('proof')){
            $formfield['proof'] = $request->file('proof')->store('proof', 'public');
        }

        $formfield['user_id'] = auth()->id();
        $formfield['type'] = 'USDT';

        invest::create($formfield);

        return redirect()->back()->with('message', 'Proof of Payment received');
    }

    public function bitcoin(Request $request){
        $formfield = $request->validate([
            'amount' => 'required',
            'proof' => 'required|file|image'
        ]);

        if($request->hasFile('proof')){
            $formfield['proof'] = $request->file('proof')->store('proof', 'public');
        }

        $formfield['user_id'] = auth()->id();
        $formfield['type'] = 'BTC';

        invest::create($formfield);

        return redirect()->back()->with('message', 'Proof of Payment received');
    }

    public function ethereum(Request $request){
        $formfield = $request->validate([
            'amount' => 'required',
            'proof' => 'required|file|image'
        ]);

        if($request->hasFile('proof')){
            $formfield['proof'] = $request->file('proof')->store('proof', 'public');
        }

        $formfield['user_id'] = auth()->id();
        $formfield['type'] = 'ETH';

        invest::create($formfield);

        return redirect()->back()->with('message', 'Proof of Payment received');
    }

    public function dogecoin(Request $request){
        $formfield = $request->validate([
            'amount' => 'required',
            'proof' => 'required|file|image'
        ]);

        if($request->hasFile('proof')){
            $formfield['proof'] = $request->file('proof')->store('proof', 'public');
        }

        $formfield['user_id'] = auth()->id();
        $formfield['type'] = 'DOGE';

        invest::create($formfield);

        return redirect()->back()->with('message', 'Proof of Payment received');
    }


}
