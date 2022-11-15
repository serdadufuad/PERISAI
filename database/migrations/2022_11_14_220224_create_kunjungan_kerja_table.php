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
            $table->decimal('long', 10, 7);
            $table->decimal('lat', 10, 7);
            $table->string('kategori_kunjungan');
            $table->string('vvip');
            $table->char('id_provinsi',2);
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');
            $table->string('file_ebook');
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
