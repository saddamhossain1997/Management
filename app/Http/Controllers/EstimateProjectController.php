<?php

namespace App\Http\Controllers;

use App\Models\EstimateProject;
use Illuminate\Http\Request;

class EstimateProjectController extends Controller
{
    public function showEstimateProject()
    {
        $estimates = EstimateProject::all();
        return view('admin.estimateProject.estimate_project', compact('estimates'));
    }

    public function storeEstimateProject(Request $request)
    {


        $storeEstimateProject = new EstimateProject();
        $storeEstimateProject->name = $request->name;
        $storeEstimateProject->address =  $request->address;
        $storeEstimateProject->status = $request->status;
        $storeEstimateProject->save();
        return response()->json(['message' => 'Data stored successfully', 'data' => $storeEstimateProject]);
    }
}
