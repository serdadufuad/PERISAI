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
            $table->string('vvip');
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');
            $table->string('nama_kegiatan')->nullable();
            $table->string('file_ebook')->nullable();

            $table->string('id_country')->nullable();
            $table->string('nama_country')->nullable();
            $table->decimal('center_long_country', 10, 7)->nullable();
            $table->decimal('center_lat_country', 10, 7)->nullable();
            $table->decimal('long_min_country', 10, 7)->nullable();
            $table->decimal('lat_min_country', 10, 7)->nullable();
            $table->decimal('long_max_country', 10, 7)->nullable();
            $table->decimal('lat_max_country', 10, 7)->nullable();

            $table->string('id_region')->nullable();
            $table->string('nama_region')->nullable();
            $table->decimal('center_long_region', 10, 7)->nullable();
            $table->decimal('center_lat_region', 10, 7)->nullable();
            $table->decimal('long_min_region', 10, 7)->nullable();
            $table->decimal('lat_min_region', 10, 7)->nullable();
            $table->decimal('long_max_region', 10, 7)->nullable();
            $table->decimal('lat_max_region', 10, 7)->nullable();

            $table->string('id_district')->nullable();
            $table->string('nama_district')->nullable();
            $table->decimal('center_long_district', 10, 7)->nullable();
            $table->decimal('center_lat_district', 10, 7)->nullable();
            $table->decimal('long_min_district', 10, 7)->nullable();
            $table->decimal('lat_min_district', 10, 7)->nullable();
            $table->decimal('long_max_district', 10, 7)->nullable();
            $table->decimal('lat_max_district', 10, 7)->nullable();

            $table->string('id_place')->nullable();
            $table->string('nama_place')->nullable();
            $table->decimal('center_long_place', 10, 7)->nullable();
            $table->decimal('center_lat_place', 10, 7)->nullable();
            $table->decimal('long_min_place', 10, 7)->nullable();
            $table->decimal('lat_min_place', 10, 7)->nullable();
            $table->decimal('long_max_place', 10, 7)->nullable();
            $table->decimal('lat_max_place', 10, 7)->nullable();

            $table->string('id_locality')->nullable();
            $table->string('nama_locality')->nullable();
            $table->decimal('center_long_locality', 10, 7)->nullable();
            $table->decimal('center_lat_locality', 10, 7)->nullable();
            $table->decimal('long_min_locality', 10, 7)->nullable();
            $table->decimal('lat_min_locality', 10, 7)->nullable();
            $table->decimal('long_max_locality', 10, 7)->nullable();
            $table->decimal('lat_max_locality', 10, 7)->nullable();

            $table->string('id_postcode')->nullable();
            $table->string('nama_postcode')->nullable();
            $table->decimal('center_long_postcode', 10, 7)->nullable();
            $table->decimal('center_lat_postcode', 10, 7)->nullable();
            $table->decimal('long_min_postcode', 10, 7)->nullable();
            $table->decimal('lat_min_postcode', 10, 7)->nullable();
            $table->decimal('long_max_postcode', 10, 7)->nullable();
            $table->decimal('lat_max_postcode', 10, 7)->nullable();

            $table->string('id_neighborhood')->nullable();
            $table->string('nama_neighborhood')->nullable();
            $table->decimal('center_long_neighborhood', 10, 7)->nullable();
            $table->decimal('center_lat_neighborhood', 10, 7)->nullable();
            $table->decimal('long_min_neighborhood', 10, 7)->nullable();
            $table->decimal('lat_min_neighborhood', 10, 7)->nullable();
            $table->decimal('long_max_neighborhood', 10, 7)->nullable();
            $table->decimal('lat_max_neighborhood', 10, 7)->nullable();

            $table->string('id_poi')->nullable();
            $table->string('nama_poi')->nullable();
            $table->decimal('center_long_poi', 10, 7)->nullable();
            $table->decimal('center_lat_poi', 10, 7)->nullable();
            $table->decimal('long_min_poi', 10, 7)->nullable();
            $table->decimal('lat_min_poi', 10, 7)->nullable();
            $table->decimal('long_max_poi', 10, 7)->nullable();
            $table->decimal('lat_max_poi', 10, 7)->nullable();


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
