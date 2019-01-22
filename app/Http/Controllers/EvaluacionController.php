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
        $data = request()->all();
        $skills = "".$data['skills1'].",".$data['skills2'].",".$data['skills3'].",".$data['skills4'].",".$data['skills5'].",".$data['skills6']."";
        $calificaciones = "".$data['calificarSkill1'].",".$data['calificarSkill2'].",".$data['calificarSkill3'].",".$data['calificarSkill4'].",".$data['calificarSkill5'].",".$data['calificarSkill6']."";

        DB::table('empleados')->insert([
            'name' => $data['nombreEmp'],
            'email' => $data['emailEmp'],
            'puesto' => $data['puestoEmp'],
            'fechaNac' => $data['fechaNacEmp'],
            'domicilio' => $data['domicilioEmp'],
            'skill' => $skills,
            'calificacion' => $calificaciones,
            'remember_token' => $data['_token'],
            'created_at' => date('Y-m-d H:m:s'),
        ]);
        return view('resultado');
    }

}
