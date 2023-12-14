<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use Illuminate\Http\Request;

class CashController extends Controller
{
    public function showCash()
    {
        $cash = Cash::sum('cash');

        return view('admin.cash.cash_balance', compact('cash'));
    }

    public function storeCash(Request $request)
    {
        $cash = new Cash();
        $cash->cash = $request->cash;
        $cash->save();
        return response()->json(['message' => 'Data stored successfully', 'data' => $cash]);
    }

    public function balanceCash()
    {
        $cash = Cash::sum('cash');
        return response()->json($cash);
    }
}
