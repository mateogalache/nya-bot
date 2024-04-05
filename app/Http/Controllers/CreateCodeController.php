<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateCodeController extends Controller
{
    public function createCode(Request $request){
        return view('create-code');
    }
    public function postCode(Request $request){
        return view('create-code');
    }
}
