<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        return view('login');
    }

    
    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect()->intended('/'); 
        } else {
            
            return back()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros.'])->withInput($request->only('email'));
        }
    }

    
}
