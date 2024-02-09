<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function Login(){
        return view('login');
    }

    function LoginPost(Request $request){
        // $request->validate([
        //     'Email' => ['required'],
        //     'Password' => ['required']
        // ]);

        $credetials = [
            'email' => $request -> Email,
            'password' => $request -> Password,
        ];

        if(Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Successfully Logged in');
        }

        // if (Auth::attempt(['Email' => $request -> Email, 'Password' => $request -> Password,])) {
        //     return redirect('/home')->with('success', 'Successfully Logged in');
        // }

        return back()->with('error', 'Email or Password salah');
    }
}
