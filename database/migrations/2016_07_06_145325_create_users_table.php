<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->string('role');
            $table->boolean('email_verified');
            $table->string('email_verified_code');
            $table->boolean('active');
            $table->string('last_login');
            $table->string('firstname');
            $table->string('surname');
            $table->string('dob');
            $table->string('country');
            $table->string('website');
            $table->string('avatar');
            $table->string('twitter_username');
            $table->string('facebook');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
