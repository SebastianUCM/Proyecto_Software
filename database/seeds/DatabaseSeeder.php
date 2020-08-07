<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sebastian Cerpa',
            'email' => 'sebastian@gmail.com',
            'password' => bcrypt('sc261897'),
            'rol' => 'administrador',
        ]);
        DB::table('users')->insert([
            'name' => 'Sebastian Fuenzalida',
            'email' => 's@gmail.com',
            'password' => bcrypt('123'),
            'rol' => 'administrador',
        ]);
        DB::table('users')->insert([
            'name' => 'Silvia Troncoso',
            'email' => 'silvia@gmail.com',
            'password' => bcrypt('123'),
            'rol' => 'administrador',
        ]);

        $this->call(ColorSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(FacultadSeeder::class);
    }
}
