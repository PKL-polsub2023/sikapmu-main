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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('username');
            $table->string('password');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('kontak');
            $table->string('level');
=======
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama');
            $table->string('kontak');
            $table->string('role');
            $table->string('status_akun')->nullable();
>>>>>>> bd24631c99becb8d5470cb238fd2c9e78b0544b6
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
        Schema::dropIfExists('users');
    }
<<<<<<< HEAD
};
=======
};
>>>>>>> bd24631c99becb8d5470cb238fd2c9e78b0544b6
