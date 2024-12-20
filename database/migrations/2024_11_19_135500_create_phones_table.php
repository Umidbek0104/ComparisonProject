<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('os');
            $table->string('name');
            $table->string('display');
            $table->integer('xotira');
            $table->integer('batareka');
            $table->integer('asosiy_kamera');
            $table->integer('old_kamera');
            $table->integer('sim_karta');
            $table->integer('narxi');
            $table->string('image');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
