<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    function Data(){
        return view('data');
    }

    function DataPost(Request $request){

        $request->validate([
            'CV' => ['required', 'mimes:pdf,png,jpg,jpeg'],
            'Evidence' => ['required', 'mimes:pdf,png,jpg,jpeg']
        ]);

        $filename = $request -> file('CV')->getClientOriginalName();
        $request->file('CV')->storeAs('/public'.'/'.$filename);

        $filename = $request -> file('Evidence')->getClientOriginalName();
        $request->file('Evidence')->storeAs('/public'.'/'.$filename);

        Data::create([
            'CV' => $filename,
            'Evidence' => $filename
        ]);

        return redirect('/data');
    }
}
