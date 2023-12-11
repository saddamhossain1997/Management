<?php

namespace App\helper;

use Illuminate\Http\Request;

use App\Models\Bank;

function helper(Request $request)
{
    $bank_status = new Bank();
    $bank_status->bank_name = $request->bank_name;
    $bank_status->bank_status = $request->bank_status;
    $bank_status->save();
    echo "this is helper function  successfully data";
}
