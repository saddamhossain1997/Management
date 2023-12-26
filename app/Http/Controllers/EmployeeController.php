<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showEmployee()
    {

        $branches = Designation::all();
        $designations = Designation::with('department')->get();
        // $banksWithBranches = Bank::with('branches')->get();
        // dd($banksWithBranches);

        return view('admin.employee.show_employee');
    }
    public function showEmployeePage()
    {
        $departments = Department::all();


        return view('admin.employee.store_employee', compact('departments'));
    }



    public function storeEmployee(Request $request)
    {
        $designation_status = new Designation();
        $designation_status->department_id = $request->department_id;
        $designation_status->designation_name = $request->designation_name;
        $designation_status->designation_status = $request->designation_status;
        $designation_status->save();
        return redirect()->route('showEmployee');
    }


    public function getEmployee($id)
    {
        $designations = Designation::where('department_id', $id)->get();


        return response()->json($designations);
    }
}
