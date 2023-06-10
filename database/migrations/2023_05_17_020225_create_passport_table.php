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
            $table->string('no_passport')->unique();
            $table->bigInteger('nik');
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->string('foto')->nullable();
            $table->string('kode_negara')->default('IDN');
            $table->date('tgl_pengeluaran')->nullable();
            $table->date('batas_tgl')->nullable();
            $table->string('kantor')->nullable();
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
        Schema::dropIfExists('passport');
    }
};
