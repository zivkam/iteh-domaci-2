<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaSefMagacins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('magacins', function (Blueprint $table) {
            $table->after('ulica', function ($table) {
                $table->string('sef')->nullable;
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
        Schema::table('magacins', function (Blueprint $table) {
            $table->dropColumn('ulica');
        });
    }
}
