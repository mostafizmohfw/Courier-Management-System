<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'branch_id' => rand(1,6),
            'dob' => Str::random(10),
            'doj' => Str::random(10),
            'mobile' => fake()->phoneNumber(),
            'nid' => fake()->name(),
            'job_id' => Str::random(10),
            'address' => fake()->address(),
            'status' => rand(0,1),
            'employee_type' => rand(0,4),
        ];
    }
}
