<?php

use Illuminate\Database\Seeder;

class PropiedadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propiedad')->insert([
        'nombre' => 'Propiedad A',
        'descripcion' => "Descripción A",
        'id_empresa' => 1,
      ]);

       
    }
}
