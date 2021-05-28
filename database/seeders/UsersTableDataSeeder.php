<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         User::create([
            'name'=> 'juan',
            'email'=> 'hola@programacionymas.com',
            'password'=> bcrypt("123123")
        ]);

        User::create([
            'name'=> 'Carlos',
            'email'=> 'Carlos@programacionymas.com',
            'password'=> bcrypt("123123")
        ]);

        User::create([
            'name' => 'Ramos',
            'email' => 'ramos@programacionymas.com',
            'password' => bcrypt('123123')
        ]);
    }
}
