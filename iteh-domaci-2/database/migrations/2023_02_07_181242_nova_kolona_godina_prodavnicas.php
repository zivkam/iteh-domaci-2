<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaGodinaProdavnicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prodavnicas', function (Blueprint $table) {
            $table->after('website', function ($table) {
                $table->integer('godina');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prodavnicas', function (Blueprint $table) {
            $table->dropColumn('godina');

        });
    }
}
