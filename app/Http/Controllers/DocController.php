<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Codes;

class DocController extends Controller
{

    public function showDoc(Request $request)
    {

        $index = ['Nya-Bot','Motivaciones e intereses','¿Qué es Nya-bot?','Voskk','Prototipo','Scripts','Página Web','Flujo de datos','Video demostración','Implementaciones Futuras','Conclusiones'];

        $request->num ? $num = $request->num : $num = 0;

        return view('doc',compact('index','num'));
    }


}
