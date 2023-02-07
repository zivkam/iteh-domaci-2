<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaKolonePbrojGrads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grads', function (Blueprint $table) {
            $table->renameColumn('posanski_broj', 'postanski_broj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grads', function (Blueprint $table) {
            $table->renameColumn('postanski_broj', 'posanski_broj');
        });
    }
}
