<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('empresa')->insert([
        'nombre' => 'Empresa A',
        'email' => 'a@empresa.com',
        'descripcion' => "La empresa A",
        //'cargo' => 'Gerente de ventas',
        'web' => 'www.web.cl',
        'telefono' => '23213321',
        'id_user' => 1,
      ]);

      DB::table('empresa')->insert([
        'nombre' => 'Empresa B',
        'email' => 'b@empresa.com',
        'descripcion' => "La empresa b",
        //'cargo' => 'Gerente de ventas',
        'web' => 'www.web.cl',
        'telefono' => '23213321',
        'id_user' => 1,
      ]); 
    }
}
