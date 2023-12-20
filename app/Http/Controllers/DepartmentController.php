<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function showDepartment()
    {

        $departments = Department::all();

        return view('admin.department.show_department', compact('departments'));
    }
    public function showDepartmentPage()
    {

        $banks = Bank::all();
        return view('admin.department.store_department', compact('banks'));
    }



    public function storeDepartment(Request $request)
    {
        $department_status = new Department();
        $department_status->department_name = $request->department_name;
        $department_status->department_status = $request->department_status;
        $department_status->save();
        return redirect()->route('showDepartment');
    }

    public function ActiveDepartment($id)
    {
        $department_status =  Department::findOrFail($id)->first();
        if ($department_status->department_status == 1) {
            $department_status = 0;
        } else {
            $department_status = 1;
        }
        Department::findOrFail($id)->update(['department_status' =>  $department_status]);

        return redirect()->back();
    }
}
