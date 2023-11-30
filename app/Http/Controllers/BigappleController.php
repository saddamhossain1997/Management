<?php

namespace App\Http\Controllers;

use App\Models\BigappleCosting;
use Illuminate\Http\Request;

class BigappleController extends Controller
{
    public function showBig()
    {
        $bigapples = BigappleCosting::all();
        return view('admin.bigapple.bigapple_costing', compact('bigapples'));
    }

    public function storeBig(Request $request)
    {



        $bigapple = new BigappleCosting();
        $bigapple->quantity = $request->quantity;
        $bigapple->first_ratio =  $request->first_ratio;
        $bigapple->second_ratio = $request->second_ratio;
        $bigapple->third_ratio = $request->third_ratio;
        $bigapple->date = $request->date;
        $bigapple->note = $request->note;
        $bigapple->cement_cost_per_bag = $request->cement_cost_per_bag;
        $bigapple->sands_cost_per_cft = $request->sands_cost_per_cft;
        $bigapple->aggregate_cost_cft = $request->aggregate_cost_cft;
        $bigapple->save();

        return response()->json(['message' => 'Data stored successfully', 'data' => $bigapple]);
    }

    public function detailBig($id)
    {
        $details = BigappleCosting::where('id', $id)->latest()->first();
        
        return view('admin.bigapple.bigapple_costing_details', compact('details'));
    }
}
