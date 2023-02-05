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
        Schema::create('pemains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('club_id');
            $table->date('date');
            $table->foreign('club_id')
            ->references('id')
            ->on('clubs')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->integer('nopung');
            $table->string('nickname');
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
        Schema::dropIfExists('pemains');
    }
};
