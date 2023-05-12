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
            $table->char('nik')->unique();
            $table->foreign('nik')->references('nik')->on('kk')->onDelete('cascade');
            $table->char('no_kk');
            $table->foreign('no_kk')->references('no_kk')->on('kk')->onDelete('cascade');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->char('jk');
            $table->char('goldar');
            $table->text('alamat');
            $table->string('agama');
            $table->char('status_pernikahan');
            $table->string('pekerjaan');
            $table->char('kewarganegaraan');
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
        Schema::dropIfExists('ktps');
    }
};
