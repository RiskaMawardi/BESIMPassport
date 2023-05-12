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
            $table->id();
            $table->char('id_permohonan')->unique();
            $table->char('nik');
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->char('jenis_pengajuan');
            $table->char('kepentingan');
            $table->string('negara_tujuan');
            $table->string('kota_tujuan');
            $table->date('mulai_dari');
            $table->date('sampai');
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
        Schema::dropIfExists('permohonans');
    }
};
