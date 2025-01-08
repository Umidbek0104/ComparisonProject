<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class TaqqoslashController extends Controller
{
    public function resoltPage()
    {
        $phones=Phone::all();
        return view('resolt',compact('phones'));
    }
    public function resoltCheck(Request $request)
    {
        $phone1=Phone::find(request('phone1'));
        $phone2=Phone::find(request('phone2'));
        return view('resolt',compact('phone1','phone2'));

    }
}
