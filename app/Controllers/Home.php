<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Pasar parametros a la vista
        $datos['nombre'] = "Dubier Andrey";
        $datos['programas'] = ['Desarrollo de Software', 'Sistemas', 'Redes', 'Mecanica'];
        $datos['contacto'] = [
            'cedula' => '145',
            'nombre' => 'Peranito Gonzales',
            'salario' => 2500000
        ];
        return view('welcome_message', $datos);
        //echo "Hola desde el metodo index";
    }

    function miIndex(){
        echo view("welcome_message");
    }
}
