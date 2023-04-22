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
        Schema::create('pet_store', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('seller');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->integer('equipment_id');
            $table->integer('species_id');
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
        Schema::dropIfExists('pet_store');
    }
};