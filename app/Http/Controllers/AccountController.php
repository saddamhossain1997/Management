<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Bank;
use App\Models\Branch;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function showAccount()
    {
        // $accounts = Account::with('bank', 'branch')->get();

        $accounts = Account::join('banks', 'accounts.bank_id', '=', 'banks.id')
            ->join('branches', 'accounts.branch_id', '=', 'branches.id')
            ->get();
        // dd($accounts);
        return view('admin.account.show_account', compact('accounts'));
    }
    public function showAccountPage()
    {
        $banks = Bank::all();
        $branches = Branch::all();

        return view('admin.account.store_account', compact('banks', 'branches'));
    }



    public function storeAccount(Request $request)
    {
        $account_status = new Account();
        $account_status->bank_id = $request->bank_id;
        $account_status->branch_id = $request->branch_id;
        $account_status->account_name = $request->account_name;
        $account_status->account_no = $request->account_no;
        $account_status->account_code = $request->account_code;
        $account_status->account_description = $request->account_description;
        $account_status->account_opening_balance = $request->account_opening_balance;
        $account_status->account_status = $request->account_status;
        $account_status->save();
        return redirect()->route('showAccount');
    }

    public function ActiveAccount($id)
    {
        $account_status =  Account::findOrFail($id)->first();
        if ($account_status->account_status == 1) {
            $account_status = 0;
        } else {
            $account_status = 1;
        }
        Account::findOrFail($id)->update(['account_status' =>  $account_status]);

        return redirect()->back();
    }


    public function getBranches($id)
    {
        $branches = Branch::where('bank_id', $id)->get();

        return response()->json($branches);
    }
}
