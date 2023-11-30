<?php

namespace App\Http\Controllers;

use App\Models\Plaster;
use Illuminate\Http\Request;

class PlasterController extends Controller
{
    public function showPlaster()
    {
        $plasters = Plaster::all();
        return view('admin.plaster.plaster_costing', compact('plasters'));
    }

    public function storePlaster(Request $request)
    {


        $plasters = new Plaster();
        $plasters->FirstRatio = $request->FirstRatio;
        $plasters->SecondRatio =  $request->SecondRatio;
        $plasters->FloorQuantity = $request->FloorQuantity;
        $plasters->DryMortar = $request->DryMortar;
        $plasters->CementCostPerBag = $request->CementCostPerBag;
        $plasters->date = $request->date;
        $plasters->note = $request->note;
        $plasters->SandsCostPerCft = $request->SandsCostPerCft;
        $plasters->PlasterArea = $request->PlasterArea;
        $plasters->side = $request->side;
        $plasters->PlasterThickness = $request->PlasterThickness;
        $plasters->TotalPlasterArea = $request->TotalPlasterArea;
        $plasters->save();
        // $request->session()->flash('success', 'Plaster was successful!');

        return response()->json(['message' => 'Data stored successfully', 'data' => $plasters]);
    }

    public function detailPlaster($id)
    {
        $details = Plaster::where('id', $id)->latest()->first();

        return view('admin.plaster.plaster_costing_details', compact('details'));
    }
}
