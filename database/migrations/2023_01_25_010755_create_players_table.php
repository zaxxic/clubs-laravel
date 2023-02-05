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
    //
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->nullable();
            $table->string('posisi');
            $table->integer('number');
            $table->string('asal');
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
        Schema::dropIfExists('players');
    }
};
