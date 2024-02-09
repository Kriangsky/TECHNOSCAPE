<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    function Register(){
        return view('register');
    }

    function RegisterPost(Request $request){
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],

            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            ],


            'Group_Name' => ['required'],
            'Name' => ['required'],
            'Birth_Date' => ['required'],
            'Line_Id' => ['required'],
            'Phone_Number' => ['required']
        ]);

        $user = new User();

        $user->Group_Name = $request->Group_Name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->Name = $request->Name;
        $user->Birth_Date = $request->Birth_Date;
        $user->Line_Id = $request->Line_Id;
        $user->Phone_Number = $request->Phone_Number;



        // User::create([
        //     'Group_Name' => $request -> Group_Name,
        //     'Name' => $request -> Name,
        //     'Email' => $request -> Email,
        //     'Password' => Hash::make($request -> Password),
        //     'Birth_Date' => $request -> Birth_Date,
        //     'Line_Id' => $request -> Line_Id,
        //     'Phone_Number' => $request -> Phone_Number
        // ]);

        $user->save();
        return back()->with('success', 'Registered');
        // return redirect('/register');
    }

    function Data(){
        $dataRegis = User::all();
        return view('data', compact('dataRegis'));
    }

    function login(){
        return view('login');
    }

    function LoginPost(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        $credentials = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];

        // $credentials = $request->only('email', 'password');

        // dd($credentials);
        // $email = $request -> input('email');
        // $password = $request -> input('password');

        if(Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Successfully Logged in');
        }

        // if (Auth::attempt(['email' => $request -> Email, 'password' => $request -> Password])) {
        //     return redirect('/home')->with('success', 'Successfully Logged in');
        // }

        return back()->with('error', 'Email or Password salah');
    }

}

