<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_models', function (Blueprint $table) {
             $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('gender');
            $table->string('mobile');
            $table->string('quali');
            $table->string('subjects');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('tutor_models');
    }
}
