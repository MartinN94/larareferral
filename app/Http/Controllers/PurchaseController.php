<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('purchase');
    }

    public function store(Request $request)
    {
        $sum = 0;
        foreach ($request->articles as  $article) {
            $sum += $article;
        }

        Purchase::create([
            'user_id' => Auth::user()->id,
            'sum' => $sum
        ]);

        $purchaseCount = count(Purchase::where('user_id', Auth::user()->id)->get());

        if (Auth::user()->referrer_id != null && $purchaseCount == 1) {
            $referrer = User::where('id', Auth::user()->referrer_id)->first();
            $referrerWallet = $referrer->wallet;
            $referrerWallet += 100;
            $referrer->update([
                'wallet' => $referrerWallet
            ]);
        }

        return redirect()->route('home')->with('message', 'Purchase is successful');
    }
}
