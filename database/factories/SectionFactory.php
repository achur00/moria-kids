<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'page_id'=>1,
            'name'=>$this->faker->name(),
            'content'=>$this->faker->text(),
            'order'=>$this->faker->randomNumber(),
            'image'=>$this->faker->image()
        ];
    }
}
