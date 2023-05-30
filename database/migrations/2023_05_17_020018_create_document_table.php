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
        Schema::create('document', function (Blueprint $table) {
            $table->id('id_document');
            //$table->integer('id_document')->unique();
            $table->integer('nik');
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->string('kk_elektronik')->nullable();
            $table->string('ktp_elektronik')->nullable();
            $table->string('akta')->nullable();
            $table->string('buku_nikah')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('surat_baptis')->nullable();
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
        Schema::dropIfExists('document');
    }
};
