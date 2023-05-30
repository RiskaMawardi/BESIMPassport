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
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id('id_permohonan');
            //$table->bigInteger('id_permohonan')->unique();
            $table->integer('nik');
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->char('jenis_passpor');
            $table->char('kepentingan');
            $table->string('negara_tujuan');
            $table->date('keberangkatan');
            $table->date('kepulangan');
            $table->enum('status_permohonan',['pending','ditolak','disetujui'])->default('pending');
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
        Schema::dropIfExists('permohonan');
    }
};
