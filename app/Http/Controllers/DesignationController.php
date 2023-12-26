<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function showDesignation()
    {

        $branches = Designation::all();
        $designations = Designation::with('department')->get();
        // $banksWithBranches = Bank::with('branches')->get();
        // dd($banksWithBranches);

        return view('admin.designation.show_designation', compact('designations'));
    }
    public function showDesignationPage()
    {
        $departments = Department::all();


        return view('admin.designation.store_designation', compact('departments'));
    }



    public function storeDesignation(Request $request)
    {
        $designation_status = new Designation();
        $designation_status->department_id = $request->department_id;
        $designation_status->designation_name = $request->designation_name;
        $designation_status->designation_status = $request->designation_status;
        $designation_status->save();
        return redirect()->route('showDesignation');
    }

    public function ActiveDesignation($id)
    {
        $designation_status =  Designation::findOrFail($id)->first();
        if ($designation_status->branch_status == 1) {
            $designation_status = 0;
        } else {
            $designation_status = 1;
        }
        Designation::findOrFail($id)->update(['designation_status' =>  $designation_status]);

        return redirect()->back();
    }
}
