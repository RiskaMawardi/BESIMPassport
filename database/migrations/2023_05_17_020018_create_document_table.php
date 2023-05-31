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
            $table->bigInteger('nik');
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->string('kk')->nullable();
            $table->string('pathkk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('pathktp')->nullable();
            $table->string('akta')->nullable();
            $table->string('pathakta')->nullable();
            $table->string('dokumen_tambahan')->nullable();
            $table->string('pathdoc')->nullable();

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
