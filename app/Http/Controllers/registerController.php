<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class registerController extends Controller
{
    public function register (Request $request){

            //$data=$request->input();
            $data=$request->validate([
                'name' => 'required',
                'email'=> 'required',
                'password'=> 'required',
            ]);
            $data['password']= Hash::make($request->password);
            DB::table('Users')->insert($data);

            return "esta registrado";
        }

}
