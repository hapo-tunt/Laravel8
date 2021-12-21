<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('avatar')->nullable();
            $table->string('users_name', 100)->unique();
            $table->string('password', 100);
            $table->tinyInteger('role');
            $table->string('full_name')->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('about_me')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('facebook')->nullable();
            $table->string('slack')->nullable();
            $table->tinyInteger('teaching_exp')->nullable();
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
        Schema::dropIfExists('users');
    }
}
