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

        //$this->guardarCodigoEnPC($request); //prueba en pc
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
    }

    private function guardarCodigoEnPC($request)
    {
        // Obtener el código y la extensión desde la solicitud
        $codigo = $request->code;
        $nombreArchivo = str_replace(' ', '_', $request->title);
        $extension = ($request->type == 'C') ? 'c' : (($request->type == 'Python') ? 'py' : '');
        $keyword = $request->keyword;

        // Ruta de la carpeta 'Aplicaciones' dentro de 'Documentos' en tu PC
        $rutaCarpeta = 'C:/Users/Usuario/OneDrive - La Salle/Documents/Aplicaciones';

        // Verificar si la carpeta existe, si no, crearla
        if (!file_exists($rutaCarpeta)) {
            mkdir($rutaCarpeta, 0777, true);
        }

        // Guardar el código en la carpeta 'Aplicaciones'
        $rutaArchivo = $rutaCarpeta . "/$nombreArchivo.$extension";
        file_put_contents($rutaArchivo, $codigo);
    }

/*private function obtenerIpRaspberry()
{
    $clienteAvahi = new AvahiClient();
    $navegador = $clienteAvahi->createServiceBrowser();
    $navegador->addListener(function ($client, $interface, $protocol, $name, $type, $domain, $flags) use (&$direccionIp) {
        // La dirección IP se puede obtener a partir del nombre y el dominio
        $direccionIp = gethostbyname("$name.$domain");
    });
    $navegador->browse();
    return $direccionIp;
}*/








}
