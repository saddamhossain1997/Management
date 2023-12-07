<?php

namespace App\Http\Controllers;

use App\Models\Plaster;
use App\Models\PlasterExtraCost;
use Illuminate\Http\Request;

class PlasterController extends Controller
{

    public function showPlasterDetails($id)
    {
        // $details = BricksExtraCost::where('brick_id', $id)->latest()->first();
        $details = Plaster::with('PlasterExtra')->latest()->first();

        return view('admin.plaster.plaster_costing_details', compact('details'));
    }

    public function showPlasterAdd()
    {
        $bricks = Plaster::all();
        return view('admin.plaster.plaster_costing');
    }
    public function showPlaster()
    {

        $plasters = Plaster::with('PlasterExtra')->get();

        return view('admin.plaster.plaster_costing_table', compact('plasters'));
    }

    public function storePlasterExtra(Request $request)
    {

        // dd($request->all());
        $plaster = new Plaster();
        $plaster->FloorQuantity = $request->FloorQuantity;
        $plaster->DryMortar = $request->DryMortar;
        $plaster->FirstRatio = $request->FirstRatio;
        $plaster->SecondRatio = $request->SecondRatio;
        $plaster->date = $request->date;
        $plaster->note = $request->note;
        $plaster->PlasterCostPerPcs = $request->plasterCostPerPcs;
        $plaster->CementCostPerBag = $request->plasterCementCostPerBag;
        $plaster->save();
        $insertData = [];
        for ($i = 0; $i < count($request->square_feet); $i++) {

            $insertData[] = [
                'plaster_id' => $plaster->id,
                'PlasterArea' => $request->square_feet[$i],
                'Side' => $request->thickness[$i],
                'PlasterThickness' => $request->Plaster[$i],
                'TotalPlasterArea' => $request->total_bricks[$i],
                'TotalPlaster' => $request->getTotal,
            ];
        }
        PlasterExtraCost::insert($insertData);


        return redirect()->route('showPlaster')->with('success', 'this is data successfully');
    }


    // ===============test=======================
    public function showPlasterPage()
    {
        $bricks = Plaster::all();
        return view('admin.plaster.plaster_costing', compact('bricks'));
    }
}
