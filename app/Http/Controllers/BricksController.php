<?php

namespace App\Http\Controllers;

use App\Models\Brick;
use App\Models\BricksExtraCost;
use App\Models\Product;
use Illuminate\Http\Request;

class BricksController extends Controller
{


    public function showBricksDetails($id)
    {
        // $details = BricksExtraCost::where('brick_id', $id)->latest()->first();
        $details = Brick::with('BricksExtra')->latest()->first();

        return view('admin.bricks.bricks_costing_details', compact('details'));
    }

    public function showBricksAdd()
    {
        $bricks = Brick::all();
        return view('admin.bricks.bricks_costing');
    }
    public function showBricks()
    {
        $bricks = Brick::with('BricksExtra')->get();
        // dd($bricks);
        // $bricks = Brick::join('bricks_extra_costs', 'bricks.id', '=', 'bricks_extra_costs.brick_id')
        //     ->select('bricks.*', 'bricks_extra_costs.*')
        //     ->get();


        return view('admin.bricks.bricks_costing_table', compact('bricks'));
    }

    public function storeBricksExtra(Request $request)
    {


        $bricks = new Brick();
        $bricks->FloorQuantity = $request->FloorQuantity;
        $bricks->BrickSize = $request->BrickSize;
        $bricks->FirstRatio = $request->FirstRatio;
        $bricks->SecondRatio = $request->SecondRatio;
        $bricks->DryMortar = $request->DryMortar;
        $bricks->Mortar = $request->Mortar;
        $bricks->date = $request->date;
        $bricks->note = $request->note;
        $bricks->SandsCostPerCft = $request->SandsCostPerCft;
        $bricks->CementCostPerBag = $request->CementCostPerBag;
        $bricks->BricksCostPerPcs = $request->BricksCostPerPcs;
        $bricks->save();

        $insertData = [];

        for ($i = 0; $i < count($request->square_feet); $i++) {
            $insertData[] = [
                'brick_id' => $bricks->id,
                'TotalSquareFeet' => $request->square_feet[$i],
                'Thickness' => $request->thickness[$i],
                'TotalBricks' => $request->total_bricks[$i],
                'TotalMortars' => $request->getTotal,
            ];
        }
        BricksExtraCost::insert($insertData);


        return redirect()->route('showBricks')->with('success', 'this is data successfully');
    }


    // ===============test=======================
    public function showBricksPage()
    {
        $bricks = Brick::all();
        return view('admin.bricks.bricks_costing', compact('bricks'));
    }
}
