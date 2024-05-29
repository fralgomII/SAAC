<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        user::create([
            'name'=>'Franklin Albeiro Gómez Mendoza',
            'email'=>'fralgom@gmail.com',
            'password'=>bcrypt('Valery0925')
        ])->assignRole('Administrador');

        User::factory(9)->create();
    }

}
