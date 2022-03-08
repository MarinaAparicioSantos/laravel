<?php

namespace App\Http\Controllers;

use App\Models\Peticiones;
use Illuminate\Http\Request;
use App\Mail\notificarMail;
use Illuminate\Support\Facades\Mail;


class enviarCorreoController extends Controller
{
    public function solicitud(){

        return view('components.solicitud');
    }

    public function sendEmail(){

        if(isset($_POST['nombreApellidos']) && isset($_POST['titulo'])&& isset($_POST['correo'])){

            $peticiones = new Peticiones();
            $peticiones->nombreApellidos = $_POST['nombreApellidos'];
            $peticiones->correo = $_POST['correo'];
            $peticiones->titulo = $_POST['titulo'];
            $peticiones->save();

            Mail::to($_POST['correo'])->send(new notificarMail($_POST['titulo']));
            return "El correo se ha enviado correctamente";

        }else{

            return "No se ha podido enviar el correo";
        }
    }

    public function listadoPeticiones(){

        $peticiones = Peticiones::all();
        return view("components.listado-peticiones",  ['peticiones' =>$peticiones]);
    }
}
