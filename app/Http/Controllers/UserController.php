<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show() {
        return view('startPage');
    }

    public function getUsername() {
        echo "userName";
        return redirect('/');   // read about redirect
    }
}
