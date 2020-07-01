<?php

use Illuminate\Database\Seeder;

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

        $this->call(ColorSeeder::class);
        $this->call(CarreraSeeder::class);
    }
}
