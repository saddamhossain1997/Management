<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use DateTime;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function showBank()
    {

        $banks = Bank::all();
        $projects = Bank::all();
        return view('admin.bank.show_bank', compact('banks'));
    }
    public function showBankPage()
    {


        return view('admin.bank.store_bank');
    }



    public function storeBank(Request $request)
    {
        $bank_status = new Bank();
        $bank_status->date = $request->date;
        $bank_status->bank_name = $request->bank_name;
        $bank_status->bank_status = $request->bank_status;
        $bank_status->save();
        return redirect()->route('showBank');
    }

    public function ActiveBank($id)
    {
        $bank_status =  Bank::findOrFail($id)->first();
        if ($bank_status->bank_status == 1) {
            $bank_status = 0;
        } else {
            $bank_status = 1;
        }
        Bank::findOrFail($id)->update(['bank_status' =>  $bank_status]);

        return redirect()->back();
    }
    public function search(Request $request)
    {
        $date = new DateTime($request->search);
        $format = $date->format('d F y');

        $formatDates = Bank::where('date', $date)->latest()->get();

        return view('admin.bank.search', compact('formatDates'));
    }
}
