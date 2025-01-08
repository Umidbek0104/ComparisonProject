<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexPage()
    { $phones=Phone::all();
        return view('index',compact('phones'));
    }
//    public function resoltPage()
//    {
//        return view('resolt');
//    }
}
