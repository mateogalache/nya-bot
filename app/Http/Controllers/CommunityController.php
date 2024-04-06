<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Codes;

class CommunityController extends Controller
{

    public function showCommunityForm(Request $request)
    {
        $codes = Codes::query(); // Obtener una instancia de consulta sin ejecutarla

        if ($request->termino) {
            $codes = $codes->where('title', 'like', '%' . $request->termino . '%');
        }

        $codes = $codes->get(); // Obtener los resultados después de todas las operaciones de filtrado

        return view('community', compact('codes'));
    }


}
