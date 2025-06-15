<?php

namespace Database\Seeders;
use App\Models\Submenu;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Submenu::factory(1)->create();
    }
}
