<?php

namespace App\Http\Controllers;

class EvaluacionController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function registro(){
        return view('registro');
    }

    public function listado(){
        return view('listado');
    }

    public function detalles($id){
        return view('detalles-empleado', compact('id') );
    }

    public function resultado(){
        return view('resultado');
    }

}
