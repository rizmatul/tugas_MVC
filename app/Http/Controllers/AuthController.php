<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_post(Request $request){
        
            $first_name = $request['first_name'];
            $last_name = $request['last_name'];
        
        return view ('welcome', compact('first_name', 'last_name'));
    }
}
