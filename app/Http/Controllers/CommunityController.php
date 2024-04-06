<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Codes;
use App\Models\User;

class CommunityController extends Controller
{

    public function showCommunityForm(Request $request)
    {
        $codes = Codes::query(); // Obtener una instancia de consulta sin ejecutarla

        if ($request->termino) {
            $codes = $codes->where('title', 'like', '%' . $request->termino . '%');
        }

        $codes = $codes->orderBy('title')->get();
        // Obtener los resultados después de todas las operaciones de filtrado
        $user = User::all();
        return view('community', compact('codes','user'));
    }


}
