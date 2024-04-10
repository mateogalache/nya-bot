<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Codes;


class DBController extends Controller
{
    public function showDB(Request $request){
        $all = [];
        $datos = [];
        $registros = User::all();
        foreach ($registros as $registro) {
            // Obtiene las columnas y sus valores
            $columnasYValores = $registro->getAttributes();

            $datos[] = $columnasYValores;
        }
        $all['user'] = $datos;


        $registros = Codes::all();
        foreach ($registros as $registro) {
            // Obtiene las columnas y sus valores
            $columnasYValores = $registro->getAttributes();

            $datos[] = $columnasYValores;
        }
        $all['codes'] = $datos;

        dd($all);
    }
}
