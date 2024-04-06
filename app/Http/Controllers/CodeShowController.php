<?php

namespace App\Http\Controllers;
use App\Models\Codes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpseclib3\Net\SSH2; // Necesitarás importar la clase SSH2 desde la biblioteca phpseclib


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

    public function postCode(Request $request)
    {
        //$this->ejecutarCodigoEnRaspberry($request);

        return redirect()->route('profile');
    }

    private function ejecutarCodigoEnRaspberry($request)
    {
        $host = 'tu_direccion_ip_raspberry'; // Cambia esto por la dirección IP de tu Raspberry Pi
        $port = 22; // Puerto SSH
        $username = 'team3'; // Nombre de usuario SSH de tu Raspberry Pi
        $password = 'team3'; // Contraseña SSH de tu Raspberry Pi

        // Crear una nueva instancia SSH
        $ssh = new SSH2($host, $port);

        // Intentar conectarse
        if (!$ssh->login($username, $password)) {
            exit('Error de autenticación');
        }

        // Obtener el código y la extensión desde la solicitud

        $codigo = $request->code;
        $nombreArchivo = str_replace(' ', '_', $request->title);
        $extension = ($request->type == 'C') ? 'c' : (($request->type == 'Python') ? 'py' : '');
        $keyword = $request->keyword;


        // Guardar el código en la Raspberry Pi
        $rutaArchivo = "/aplicaciones/$nombreArchivo.$extension";
        $comando = "echo '$codigo' > $rutaArchivo";
        $ssh->exec($comando);
    }







}
