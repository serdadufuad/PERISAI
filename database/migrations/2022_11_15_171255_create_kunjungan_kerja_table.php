<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('data_titik');
            $table->decimal('long', 10, 7);
            $table->decimal('lat', 10, 7);
            $table->string('nama_vvip');
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');
            $table->string('nama_kegiatan')->nullable();
            $table->string('file_ebook')->nullable();
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
        Schema::dropIfExists('kunjungan_kerja');
    }
}
