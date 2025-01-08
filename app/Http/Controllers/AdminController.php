<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminPage()
    {
        return view('admin');
    }

    public function index()
    {
        return view('admin');
    }

    public function loginPage()  {
        return view('login');
    }
    public function resoltPage()
    {
        return view('resolt');
    }
    public function loginCheck(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user=User::where([
            'email'=>$request['email'],
            'password'=>$request['password']
        ])->first();
        if($user){
            Auth::login($user);
            return redirect()->route('admin.page');
        }

    }


}


