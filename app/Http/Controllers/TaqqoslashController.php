<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class TaqqoslashController extends Controller
{
    public function resoltPhone()
    {
        $phones=Phone::all();
        return view('resolt',compact('phones'));
    }
}
