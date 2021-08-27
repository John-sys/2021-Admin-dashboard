<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Validation\Validator;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //
    public function auth(Request $request)
    {


        $request->validate([
            'username' => 'required|max:200|min:5',
            'password' => 'required|min:8|max:20',

        ]);

        $password = $request->password;
        $username = $request->username;

        dd("Username is $username and the password is $password");

    }


    // public function login(Request $request){
    //     if(auth()->attempt($request->only('email','password'))) {
    //         return redirect('/');
    // }


}
