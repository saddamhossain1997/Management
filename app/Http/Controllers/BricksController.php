<?php

namespace App\Http\Controllers;

use App\Models\Brick;
use App\Models\Product;
use Illuminate\Http\Request;

class BricksController extends Controller
{

    public function showBricksAdd()
    {
        $bricks = Brick::all();
        return view('admin.bricks.bricks_costing');
    }
    public function showBricks()
    {
        $bricks = Brick::all();
        return view('admin.bricks.bricks_costing_table');
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


        return redirect()->route('showBricks')->with('success', 'this is data successfully');
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
