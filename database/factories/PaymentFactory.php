<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payment_type' => 'Cash',
            'amount' => 100.00,
            'customer_id' => rand(1,10),
            'package_id' => rand(1,5),
            'employee_id' => rand(1,10),
        ];
    }
}
