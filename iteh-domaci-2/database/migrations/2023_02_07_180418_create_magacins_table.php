<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagacinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magacins', function (Blueprint $table) {
            $table->id();
            $table->string('tip');
            $table->string('telefon');
            $table->string('ulica');
            $table->foreignId('prodavnica_id')->constrained('prodavnicas');
            $table->foreignId('grad_id')->constrained('grads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magacins');
    }
}
