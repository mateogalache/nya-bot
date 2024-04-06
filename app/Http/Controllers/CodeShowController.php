<?php

namespace App\Http\Controllers;
use App\Models\Codes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodeShowController extends Controller
{
    
    public function showCodeForm($id)
    {
        $code = Codes::find($id); // Busca el código por su ID

        if (!$code) {
            abort(404); // Si no se encuentra el código, muestra un error 404
        }

        return view('codeshow', compact('code'));
    }

    

    

    
    

    
}
