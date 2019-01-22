<?php

use App\Models\Empleado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::insert('insert into empleados values ()');

        DB::table('empleados')->insert([
            'name' => 'Fulanito',
            'email' => 'correo@mensaje.com',
            'puesto' => 'Ejecutivo',
            'fechaNac' => '1928-06-12',
            'domicilio' => 'Algun lugar',
            'skill' => 'autocontrol',
            'calificacion' => '1',
            'remember_token' => '',
            'created_at' => '2019-01-21 21:08:50',
            'updated_at' => '2019-01-21 21:08:50'
        ]);

        DB::table('empleados')->insert([
            'name' => 'Sultano',
            'email' => 'corre1o@mensaje.com',
            'puesto' => 'Vendedor',
            'fechaNac' => '1928-06-13',
            'domicilio' => 'Ningun lugar',
            'skill' => 'responsabilidad',
            'calificacion' => '4',
            'remember_token' => '',
            'created_at' => '2019-01-21 21:43:50',
            'updated_at' => '2019-01-21 21:43:50'
        ]);

        \App\Models\Empleado::create([
            'name' => 'Perengano',
            'email' => 'correo2@mensaje.com',
            'puesto' => 'Payaso',
            'fechaNac' => '1928-06-14',
            'domicilio' => 'A la orilla del mar',
            'skill' => 'Puntual',
            'calificacion' => '4',
            'remember_token' => '',
            'created_at' => '2019-01-21 21:49:50',
            'updated_at' => '2019-01-21 21:49:50'
        ]);

        \App\Models\Empleado::create([
            'name' => 'Mariguanito',
            'email' => 'correo3@mensaje.com',
            'puesto' => 'Educador',
            'fechaNac' => '1928-06-15',
            'domicilio' => 'En el cerro',
            'skill' => 'Bondadoso',
            'calificacion' => '2',
            'remember_token' => '',
            'created_at' => '2019-01-21 21:56:50',
            'updated_at' => '2019-01-21 21:56:50'
        ]);
    }
}
