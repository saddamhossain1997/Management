<?php

namespace App\Http\Controllers;

use App\Models\Brick;
use Illuminate\Http\Request;

class BricksController extends Controller
{
    public function showBricks()
    {
        $bricks = Brick::all();
        return view('admin.bricks.bricks_costing', compact('bricks'));
    }

    public function storeBricks(Request $request)
    {


        $bricks = new Brick();
        $bricks->FloorQuantity = $request->FloorQuantity;
        $bricks->TotalMortars =  $request->TotalMortars;
        $bricks->Thickness = $request->Thickness;
        $bricks->FirstRatio = $request->FirstRatio;
        $bricks->SecondRatio = $request->SecondRatio;
        $bricks->date = $request->date;
        $bricks->note = $request->note;
        $bricks->TotalBricks = $request->TotalBricks;
        $bricks->TotalSquareFeet = $request->TotalSquareFeet;
        $bricks->SandsCostPerCft = $request->SandsCostPerCft;
        $bricks->CementCostPerBag = $request->CementCostPerBag;
        $bricks->BricksCostPerPcs = $request->BricksCostPerPcs;
        $bricks->DryMortar = $request->DryMortar;
        $bricks->Mortar = $request->Mortar;
        $bricks->BrickSize = $request->BrickSize;
        $bricks->save();

        return response()->json(['message' => 'Data stored successfully', 'data' => $bricks]);
    }

    public function detailBricks($id)
    {
        $details = Brick::where('id', $id)->latest()->first();

        return view('admin.bricks.bricks_costing_details', compact('details'));
    }

    // ===============test=======================
    public function showBricksPage()
    {
        $bricks = Brick::all();
        return view('admin.bricks.bricks_costing', compact('bricks'));
    }
}
