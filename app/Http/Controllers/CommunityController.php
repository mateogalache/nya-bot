<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    
    public function showCommunityForm()
    {
        return view('community');
    }

    
    

    
}
