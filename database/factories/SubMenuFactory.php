<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submenu>
 */
class SubMenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name'=>$this->faker->name(),
            'url'=>$this->faker->url(),
            'order'=>$this->faker->randomNumber(),
            'menu_id'=>3,
        ];
    }
}
