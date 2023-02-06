<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vehicle_name' => fake()->name(),
            'vehicle_number' => 'Dhk Metro Ka-485'.rand(10,50),
            'vehicle_type' => 'Cover Van',
            'branch_id' => rand(1,10),
            'employee_id' => rand(1,10),
        ];
    }
}
