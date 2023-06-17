<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date=$this->faker->dateTimeBetween('-1 years','now');
        $scheduled_date= $date->format('Y-m-d');
        $scheduled_time= $date->format('H:i:s');
        $types=['Consulta','Examen', 'Operacion',' Baños'];
        $doctorIds=User::doctors()->pluck('id');
        $patientIds=User::patients()->pluck('id');
        $status= ['Atendida','Cancelada'];

                return [
            'scheduled_date'=>$scheduled_date,
            'scheduled_time'=>$scheduled_time,
            'type'=>$this->faker->randomElement($types),
            'description'=>$this->faker->sentence(5),
            'doctor_id'=>$this->faker->randomElement($doctorIds),
            'patient_id'=>$this->faker->randomElement($patientIds),
            'specialty_id'=>$this->faker->numberBetween(1,12),
            'status'=>$this->faker->randomElement($status),

        ];
    }
}
