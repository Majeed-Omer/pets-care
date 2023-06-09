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
        Schema::create('stolen_missings', function (Blueprint $table) {
            $table->id();
            $table->string('reward');
            $table->string('email');
            $table->string('phone_number');
            $table->date('stolen_lost_date');
            $table->enum('pet_case', ['دزراو', 'ونبووە']);
            $table->string('description');
            $table->string('stolen_missing_image');
            $table->integer('user_id');
            $table->integer('approval')->default(0);
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
        Schema::dropIfExists('stolen_missings');
    }
};