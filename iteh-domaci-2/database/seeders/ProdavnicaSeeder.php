<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prodavnica;

class ProdavnicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodavnica::factory()->count(20)->create();
    }
}
