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
            $table->bigInteger('nik');
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->char('jenis_passpor',1)->nullable();
            $table->char('kepentingan',1)->nullable();
            $table->string('negara_tujuan')->nullable();
            $table->date('keberangkatan')->nullable();
            $table->date('kepulangan')->nullable();
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
