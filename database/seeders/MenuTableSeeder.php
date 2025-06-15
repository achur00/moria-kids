<?php

namespace Database\Seeders;
use App\Models\Menu;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Menu::factory()->count(4)->create();
    }
}
