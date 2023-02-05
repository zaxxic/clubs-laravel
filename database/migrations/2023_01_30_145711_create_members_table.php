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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');

            $table->string('uid')->unique();
            $table->foreignId('club_id');
            $table->foreign('club_id')
            ->references('id')
            ->on('clubs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('age');
            $table->string('team')->nullable();

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
        Schema::dropIfExists('members');
    }
};
