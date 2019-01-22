<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class EvaluacionController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function registro(){
        return view('registro');
    }

    public function listado(){
        $empleados = DB::table('empleados')->select('id','name')->get();
        return view('listado', compact('empleados'));
    }

    public function detalles($id){
        //$empleado = DB::table('empleados')->select('id','name')->where('id','$id')->take(1)->get();
        $empleado = \App\Models\Empleado::find($id);

        return view('detalles-empleado', compact('id', 'empleado') );
    }

    public function resultado(){
        return view('resultado');
    }

}
