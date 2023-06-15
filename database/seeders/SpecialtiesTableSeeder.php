<?php

namespace Database\Seeders;

use App\Models\Specialty;
use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialties = [
            'Neurología',
            'Cardiología',
            'Dermatología',
            'Geriatría',
            'Nutrición',
            'Imagenología',
            'Odontología',
            'Cirugía',
            'Traumatología',
            'Oncología',
            'Oftamología',
            'Fisioterapia'
        ];

        foreach($specialties as $specialtyName){

           $specialty = Specialty::create([
                'name'=>$specialtyName
            ]);

            $specialty->users()->saveMany(
                User::factory(3)->state(['role'=> 'Medico'])->make()
            );
        }

        User::find(3)->specialties()->save($specialty);
    }
}
