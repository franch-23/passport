<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class deleteController extends Controller
{
    public function delete(){
         Auth::user()->token()->delete();
        return "se ha cerrado la sesion";

        }
}
