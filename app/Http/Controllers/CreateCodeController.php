<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Codes;
use phpseclib3\Net\SSH2; // Necesitarás importar la clase SSH2 desde la biblioteca phpseclib


class CreateCodeController extends Controller
{
    public function createCode(Request $request){
        return view('create-code',compact('request'));
    }
    public function postCode(Request $request){

        $user = auth()->user();

        $newCode = $user->codes()->create([
            'code' => $request->code,
            'title' => $request->title,
            'description' => $request->description,
            'keyword' => $request->keyword,
            'type' => $request->type,
            'private' => $request->private
        ]);

        return redirect()->route('profile');
    }

    public function sendCode(Request $request){

        $this->ejecutarCodigoEnRaspberry($request);

        return redirect()->route('profile');
    }

    private function ejecutarCodigoEnRaspberry($request)
    {
        $host = '192.168.43.153';
        $port = 22;
        $username = 'team3';
        $password = 'team3';

        $ssh = new SSH2($host, $port);

        if (!$ssh->login($username, $password)) {
            exit('Error de autenticación');
        }

        $codigo = $request->code;
        $nombreArchivo = str_replace(' ', '_', $request->title);
        $extension = ($request->type == 'C') ? 'c' : (($request->type == 'Python') ? 'py' : '');
        $keyword = $request->keyword;

        $comandoCrearCarpeta = "mkdir -p /home/$username/aplicaciones";
        $ssh->exec($comandoCrearCarpeta);

        $rutaArchivo = "/home/$username/aplicaciones/$nombreArchivo.$extension";
        $comandoGuardarCodigo = "echo '$codigo' > $rutaArchivo";
        $ssh->exec($comandoGuardarCodigo);

        $rutaArchivo = "/home/$username/aplicaciones/$nombreArchivo.$extension";
        $comandoGuardarCodigo = "echo '$codigo' > $rutaArchivo";
        $ssh->exec($comandoGuardarCodigo);

        // Comando para actualizar el script prueba.py
        $rutaArchivo = "/home/$username/aplicaciones/$nombreArchivo.$extension";
        $comandoGuardarCodigo = "echo '$codigo' > $rutaArchivo";
        $ssh->exec($comandoGuardarCodigo);

        // Comando para actualizar el script prueba.py
        $comandoActualizarScript = "sed -i '/^archivos =/s/\]/, \"$nombreArchivo.$extension\"\]/' /home/$username/Kaldi-stt/prueba2.py";
        $comandoActualizarScript .= " && ";
        $comandoActualizarScript .= "sed -i '/^keywords =/s/\]/, \"$keyword\"\]/' /home/$username/Kaldi-stt/prueba2.py";
        $ssh->exec($comandoActualizarScript);


        ///home/$username/Kaldi-stt/prueba.py
    }
}
