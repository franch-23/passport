<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use const http\Client\Curl\AUTH_ANY;

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
