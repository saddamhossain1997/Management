<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function showBranch()
    {

        $branches = Branch::all();
        $banksWithBranches = Branch::with('bank')->get();
        // $banksWithBranches = Bank::with('branches')->get();
        // dd($banksWithBranches);

        return view('admin.branch.show_branch', compact('branches', 'banksWithBranches'));
    }
    public function showBranchPage()
    {
        $banks = Bank::all();


        return view('admin.branch.store_branch', compact('banks'));
    }



    public function storeBranch(Request $request)
    {
        $branch_status = new Branch();
        $branch_status->bank_id = $request->bank_id;
        $branch_status->branch_name = $request->branch_name;
        $branch_status->branch_status = $request->branch_status;
        $branch_status->save();
        return redirect()->route('showBranch');
    }

    public function ActiveBranch($id)
    {
        $branch_status =  Branch::findOrFail($id)->first();
        if ($branch_status->branch_status == 1) {
            $branch_status = 0;
        } else {
            $branch_status = 1;
        }
        Branch::findOrFail($id)->update(['branch_status' =>  $branch_status]);

        return redirect()->back();
    }
}
