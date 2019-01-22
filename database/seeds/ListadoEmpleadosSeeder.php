<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListadoEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$empleados = DB::select('SELECT idEmpleado, name FROM empleados');
        //$empleados = DB::select('SELECT * FROM empleados WHERE idEmpleado = 4', ['1']);
        //$empleados = DB::select('SELECT idEmpleado, name FROM empleados WHERE idEmpleado = ?', ['1']);

        //$empleados = DB::table('empleados')->select('idEmpleado','name')->take(1)->get();
        //$empleados = DB::table('empleados')->select('idEmpleado','name')->where('idEmpleado','4')->take(1)->get();
        //$empleados = DB::table('empleados')->select('*')->get();
        $empleados = DB::table('empleados')->find(4);

        dd($empleados);

    }
}
