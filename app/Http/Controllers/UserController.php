<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show() { 
        return view('startPage');
    }

    public function getUsername() {
        $name = $_POST['inputName'];
        DB::table('users')->insert([
            'user_name' => $name,
        ]);

        //sesion id_name
        //return view('test');
        //return redirect;   // read about redirect
    }
}
