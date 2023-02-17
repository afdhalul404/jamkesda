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
        Schema::create('rekapitulasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_kartu');
            $table->bigInteger('nik');
            $table->bigInteger('npp');
            $table->string('nama');
            $table->string('hub_keluarga');
            $table->string('faskes');
            $table->string('status_peserta');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
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
        Schema::dropIfExists('rekapitulasi');
    }
};
