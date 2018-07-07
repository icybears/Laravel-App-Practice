<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->integer('room_id')->nullable();
            $table->string('password');
            $table->string('bio')->nullable();
            $table->string('interests')->nullable();
            $table->string('location')->nullable();            
            $table->string('image')->default('default.jpg');
            $table->integer('posts_count')->default(0);
            $table->integer('comments_count')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        //to start the ids from 1000, just for aesthetics
        DB::update("ALTER TABLE users AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
