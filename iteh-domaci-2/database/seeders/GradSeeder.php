<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grad;

class GradSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grad::factory()->count(15)->create();
    }
}
