<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super',
            'email' => 'Admi@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('diego1212'), // password
            'lastname'=> 'Admin',
            'phone'=>'987654321',
            'location'=>'SJL',
            'role'=>'Admin',
        ]);

        User::create([
            'name' => 'Paciente1',
            'email' => 'paciente1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('diego1212'),
            'lastname'=> 'Ejemplo',
            'phone'=>'987654321',
            'location'=>'SJL',
            'role'=>'Cliente',
        ]);

        User::create([
            'name' => 'Medico1',
            'email' => 'medico1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('diego1212'), // password
            'lastname'=> 'Ejemplo',
            'phone'=>'987654321',
            'location'=>'SJL',
            'role'=>'Medico',
        ]);

        User::factory()
        ->Count(50)
        ->state(['role' => 'cliente'])
        ->create();
    }
}
