<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class InicioController extends BaseController
{
    public function llamarVistaIndex()
    {
        return view('index');
    }

    public function llamarMiEmpresa()
    {
        return view('empresa');
    }

    public function llamarAbstract()
    {
        return view('abstract');
    }

    public function llamarPerfiles()
    {
        return view('perfiles');
    }

    public function llamarTesting()
    {
        return view('testing');
    }

}
