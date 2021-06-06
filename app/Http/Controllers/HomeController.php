<?php

//Administrar las rutas controller
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*public function __invoke()
    {
        return"Bienvenido crofford";
    }
    */
    // aqui le vamos a pasar la cadena de letras a las vistas

        public function __invoke()
        {
            return view('home');
        }
}

// Metodo __invoke es cuando queremos que el controlador administre unica ruta
