<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Horarios;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(UsersTableSeeder::class);
       $this->call(SpecialtiesTableSeeder::class);
       $this->call(HorariosTableSeeder::class);
    }
}
