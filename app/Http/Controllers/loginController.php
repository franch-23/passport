<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'name'=>'',
            'email'=>'',
            'password'=> ['required'],
        ]);

        if (Auth::check()){
            return 'ya estas loguedado';
        }

        if(Auth::attempt($credentials)){
            return Auth::user()->createToken('hola')->accessToken;
        }

        return 'algo falla ';
    }
    public function datos(){
        return Auth::user();
    }
}
