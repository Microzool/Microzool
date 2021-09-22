<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailCon extends Controller
{
    //

    public function index(){
        
    }

    public function store(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:emails,email|max:255',
           
        ]);
    }
}
