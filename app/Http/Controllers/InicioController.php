<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class InicioController extends BaseController
{
    public function llamarVistaIndex()
    {
        return view('index');
    }

}
