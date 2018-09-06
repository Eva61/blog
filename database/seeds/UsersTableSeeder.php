<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,40)->create(); //Crea 40 usuarios aleatorios en base de datos

        App\User::create([ //Cuando se hace un refresh de la web no se desloguea el usuario
           'name'  => 'Cristal Gaviria',
           'email' => 'cristal.61@gmail.com',
           'password' => bcrypt('lachily17775059')
       ]);
    }
}
