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
        Schema::create('kk', function (Blueprint $table) {
            $table->id();
            $table->char('no_kk')->unique();
            $table->char('nik')->unique();
            //$table->foreign('nik')->references('nik')->on('ktp')->onDelete('cascade');
            $table->char('id_akun');
            $table->foreign('id_akun')->references('id_akun')->on('account')->onDelete('cascade');
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
        Schema::dropIfExists('kks');
    }
};
