<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'package_name' => 'Package'.rand(1,5),
            'package_type' => 'Starter',
            'pricing' => rand(150,350),
            'extras' => 'none',
        ];
    }
}
