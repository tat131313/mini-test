<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\ValidationException;
use App\User;

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

            /*DB::table('users')->insert([
                'user_name' => $request['name'],
            ]);*/

            $user = new User;
            $user->user_name = $request['name'];
            $user->save(); 
        }

        //sesion id_name
        //return view('test');
        return redirect()->route('test');
    }

    public function showRating() {
        echo "Rating";
    }
}
