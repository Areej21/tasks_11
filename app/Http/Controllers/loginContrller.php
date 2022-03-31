<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginContrller extends Controller
{


    public function index()
    {
        return view ('login');
        //
    }
    public function loginsubmit(){
        return "Form submitted";
    }
    //
}
