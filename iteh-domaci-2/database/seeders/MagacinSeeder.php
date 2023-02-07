<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Magacin;

class MagacinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Magacin::factory()->count(20)->create();
    }
}
