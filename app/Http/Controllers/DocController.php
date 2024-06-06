<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocController extends Controller
{

    public function showDoc(Request $request)
    {

        $index = ['Introducción','¿Qué es Nya-bot?','Procedimiento','Prototipo','Scripts','Página Web','Video demostración','Implementaciones Futuras','Conclusiones','Webgrafía'];

        $request->num ? $num = $request->num : $num = 0;

        return view('doc',compact('index','num'));
    }


}
