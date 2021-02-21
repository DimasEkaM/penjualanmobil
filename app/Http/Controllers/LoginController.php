<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function cekLogin(Request $request){
        $up = $request->only('username','password');

        if(Auth::attempt($up)){
            return redirect()->route('cars.index');
        }

        return redirect()->back();
    }
}
