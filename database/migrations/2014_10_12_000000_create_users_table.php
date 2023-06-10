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
            $table->id(); // id si users nya
            $table->string('name'); // nama si usersnya
            $table->string('email')->unique(); // email si usersnya gaboleh sama
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); // password
            $table->string('no_hp'); // no hp users
            $table->string('no_kk'); // no kk users
            $table->boolean('role')->default(0); // role dari users 1 = admin , 0 = users , kenapa 1 dan 0 karena tipe data boolean itu cuma true(1) flase(0)
            $table->rememberToken(); //membuat token auth pada saat register
            $table->timestamps(); //datetime pada saat users ini resgiter
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
};
