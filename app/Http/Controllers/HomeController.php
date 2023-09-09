<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function loginUser(Request $request, $id){
        // dd($request);
        // dd($request->all());
        // dd($request->email);
        // dd($request->has('email'));
        // dd($request->only('email'));
        // dd($request->except('email'));
         dd($request->query('email'), $id); //query string just for get request

    }

}