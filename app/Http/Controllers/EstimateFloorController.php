<?php

namespace App\Http\Controllers;

use App\Models\EstimateFloor;
use App\Models\EstimateProject;
use Illuminate\Http\Request;

class EstimateFloorController extends Controller
{

    public function showEstimateFloor()
    {
        $estimatesFloor = EstimateFloor::all();
        $projects = EstimateProject::all();
        return view('admin.estimateFloor.estimate_floor', compact('projects', 'estimatesFloor'));
    }

    public function storeEstimateFloor(Request $request)
    {
        $storeEstimateProject = new EstimateFloor();
        $storeEstimateProject->name = $request->name;
        $storeEstimateProject->estimate_project_id =  $request->estimate_project_id;
        $storeEstimateProject->status = $request->status;
        $storeEstimateProject->save();
        return response()->json(['message' => 'Data stored successfully', 'data' => $storeEstimateProject]);
    }

    public function Active($id)
    {
        // $supplier =  EstimateFloor::findOrFail($id)->update(['status' => 0]);
        $floor =  EstimateFloor::findOrFail($id)->first();
        if ($floor->status == 1) {

            $status = 0;
        } else {
            $status = 1;
        }
        EstimateFloor::findOrFail($id)->update(['status' =>  $status]);
        return redirect()->back();
    }
}
