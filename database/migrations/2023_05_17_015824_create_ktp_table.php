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
        Schema::create('ktp', function (Blueprint $table) {
            $table->id();
            $table->integer('nik')->unique();
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->bigInteger('no_kk');
            $table->foreign('no_kk')->references('no_kk')->on('kk')->onDelete('cascade');
            $table->char('goldar');
            $table->string('foto');
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
        Schema::dropIfExists('ktp');
    }
};
