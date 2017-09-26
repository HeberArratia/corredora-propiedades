<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin123'),
        //'cargo' => 'Gerente de ventas',
        'confirmed' => 1,
      ]);

    }
    /*
        eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGkvbG9naW4iLCJpYXQiOjE1MDQzMTAwMjgsImV4cCI6MTUwNDMxMzYyOCwibmJmIjoxNTA0MzEwMDI4LCJqdGkiOiJGeFM5Wk9yMmVRQTFWcHVHIn0.gpXc-WRvY5tFAdd3FKcypVUG7YAULQixibs6Sl698tE
    */
}
