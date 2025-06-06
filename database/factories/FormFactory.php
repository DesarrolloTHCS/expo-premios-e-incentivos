<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => '1',
            'folio' => 'EPEI-' . Str::upper(Str::random(2) . rand(10, 99)),
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'phone_number' => $this->faker->e164PhoneNumber(),
            'company' => $this->faker->company(),
            'organization_title' => $this->faker->jobTitle(),
            'interest' => $this->faker->sentence()
        ];
    }
}
