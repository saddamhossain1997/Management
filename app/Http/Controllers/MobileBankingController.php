<?php

namespace App\Http\Controllers;

use App\Models\MobileBank;
use Illuminate\Http\Request;

class MobileBankingController extends Controller
{
    public function showMobile()
    {

        $mobiles = MobileBank::all();
        $projects = MobileBank::all();
        return view('admin.mobile.show_mobile', compact('mobiles'));
    }
    public function showMobilePage()
    {


        return view('admin.mobile.store_mobile');
    }



    public function storeMobile(Request $request)
    {
        $mobile_status = new MobileBank();
        $mobile_status->mobile_name = $request->mobile_name;
        $mobile_status->mobile = $request->mobile;
        $mobile_status->total = $request->total;
        $mobile_status->mobile_opening_balance = $request->mobile_opening_balance;
        $mobile_status->mobile_status = $request->mobile_status;
        $mobile_status->save();
        return redirect()->route('showMobile');
    }

    public function ActiveMobile($id)
    {
        $mobile_status =  MobileBank::findOrFail($id)->first();
        if ($mobile_status->mobile_status == 1) {
            $mobile_status = 0;
        } else {
            $mobile_status = 1;
        }
        MobileBank::findOrFail($id)->update(['mobile_status' =>  $mobile_status]);

        return redirect()->back();
    }
}
