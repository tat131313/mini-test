<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\ValidationException;

class UserController extends Controller
{
    public function show() { 
        return view('startPage');
    }

    public function getUsername(Request $request) {

        if($request->isMethod('post')){
            $rules = array(
                'name' => 'required|min:3|max:15|unique:users,user_name',
            );

            $messages = array(
                'required' => 'The :attribute field is required.',
                'between' => 'The :attribute must be between :min - :max.',
            );

            //$validation = Validator::make(Input::get(), $rules, $messages);
            $this->validate($request, $rules, $messages);

            DB::table('users')->insert([
                'user_name' => $request['name'],
            ]);
        }
        
        
        


        //sesion id_name
        //return view('test');
        //return redirect;   // read about redirect
    }
}
