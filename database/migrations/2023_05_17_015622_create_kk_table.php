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
            $table->id('no_kk');
            $table->integer('nik')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->char('jk');
            $table->text('alamat');
            $table->char('status_sipil');
            $table->string('jenis_pekerjaan');
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
        Schema::dropIfExists('kk');
    }
};
