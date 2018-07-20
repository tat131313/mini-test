<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show() { 
        return view('startPage');
    }

    public function getUsername() {
        //echo "userName";
        return view('test');
        //return header ('Location: /send-data');   // read about redirect
    }
}
