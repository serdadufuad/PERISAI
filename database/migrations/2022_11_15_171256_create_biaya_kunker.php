<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaKunker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_kunker', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kunker')->references('id')->on('kunjungan_kerja');
            $table->foreignId('id_tim')->references('id')->on('tim');
            $table->string('no_surat');
            $table->foreignId('id_pok')->constrained('pok');
            $table->unsignedBigInteger('nominal');
            $table->string('uraian')->nullable();
            $table->foreignId('id_pegawai')->references('id')->on('pegawai');
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
        Schema::dropIfExists('biaya_kunker');
    }
}
