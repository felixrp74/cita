<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();

            $table->string('asunto')->nullable();
            $table->string('nombre')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora', $precision = 0);
            $table->string('cargo')->nullable();
            $table->string('celular')->nullable();
            $table->string('estado')->nullable();

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
        Schema::dropIfExists('citas');
    }
};
