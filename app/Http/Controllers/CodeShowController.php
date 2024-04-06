<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodeShowController extends Controller
{
    
    public function showCodeForm()
    {
        return view('codeshow');
    }

    
    

    
}
