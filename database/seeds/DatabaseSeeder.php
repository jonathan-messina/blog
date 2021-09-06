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
    {   //no usamos factory para el usuario, ya que al factory generar
        //los datos lo hace de manera random, por lo que no podriamos loguearnos
        App\User::create([
            'name' => 'A. Jonathan Messina',
            'email' => 'j@admin.com',
            'password'=> bcrypt('123456')
        ]);

        factory(App\Post::class, 24)->create();
    }
}
