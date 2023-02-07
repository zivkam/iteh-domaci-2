<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProdavnicaSeeder;
use Database\Seeders\GradSeeder;
use Database\Seeders\MagacinSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $p = new ProdavnicaSeeder();
        $g = new GradSeeder();
        $m = new MagacinSeeder();

        $p->run();
        $g->run();
        $m->run();

    }
}
