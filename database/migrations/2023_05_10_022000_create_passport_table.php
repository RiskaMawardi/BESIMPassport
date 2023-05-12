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
        Schema::create('passport', function (Blueprint $table) {
            $table->id();
            $table->char('no_passport')->unique();
            $table->char('nik');
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->string('foto');
            $table->string('kode_negara')->default('IDN');
            $table->string('nama');
            $table->string('jk');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->date('tgl_pengeluaran');
            $table->date('batas_tgl');
            $table->string('kantor');
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
        Schema::dropIfExists('passports');
    }
};
