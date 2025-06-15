<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'contact-us',
            'content' => 'Get in Touch—Your Trusted Partner for Real Estate Services, Property Management, and Investment Opportunities!',
            'mobile' => '234-08068381672 234-07061128815 ',
            'email' => 'info@el-roiproperties.org',
            'address' => '8a Familoi Street, Igbo-Efon Near Eiosa LGA Secretariat Lekki Lagos Nigeria'
        ];
    }
}
