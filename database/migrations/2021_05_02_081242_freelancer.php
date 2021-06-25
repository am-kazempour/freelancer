<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Freelancer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('age');
            $table->string('phone_number');
            $table->string('email');
            $table->string('gender');
            $table->string('Marital_status');
            $table->string('abilitis');
            $table->string('education');
            $table->string('bio');
            $table->string('languages');
            $table->string('profile_photo_name');
            $table->string('CV_name');
            $table->rememberToken();
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
        Schema::dropIfExists('freelancer');
    }
}
