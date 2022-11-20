<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Kunjungan_kerja extends Model
{
    use Notifiable, HasFactory, HasRoles;
    protected $table = "kunjungan_kerja";
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        //Data Form
        'data_titik',
        'long',
        'lat',
        'vvip',
        'tgl_berangkat',
        'tgl_pulang',
        'nama_kegiatan',
        'file_ebook',
        //Data Mapbpx or Geocoder
        'id_country',
        'nama_country',
        'center_long_country',
        'center_lat_country',
        'long_min_country',
        'lat_min_country',
        'long_max_country',
        'lat_max_country',

        'id_region',
        'nama_region',
        'center_long_region',
        'center_lat_region',
        'long_min_region',
        'lat_min_region',
        'long_max_region',
        'lat_max_region',

        'id_district',
        'nama_district',
        'center_long_district',
        'center_lat_district',
        'long_min_district',
        'lat_min_district',
        'long_max_district',
        'lat_max_district',

        'id_place',
        'nama_place',
        'center_long_place',
        'center_lat_place',
        'long_min_place',
        'lat_min_place',
        'long_max_place',
        'lat_max_place',

        'id_locality',
        'nama_locality',
        'center_long_locality',
        'center_lat_locality',
        'long_min_locality',
        'lat_min_locality',
        'long_max_locality',
        'lat_max_locality',

        'id_postcode',
        'nama_postcode',
        'center_long_postcode',
        'center_lat_postcode',
        'long_min_postcode',
        'lat_min_postcode',
        'long_max_postcode',
        'lat_max_postcode',

        'id_neighborhood',
        'nama_neighborhood',
        'center_long_neighborhood',
        'center_lat_neighborhood',
        'long_min_neighborhood',
        'lat_min_neighborhood',
        'long_max_neighborhood',
        'lat_max_neighborhood',

        'id_poi',
        'nama_poi',
        'center_long_poi',
        'center_lat_poi',
        'long_min_poi',
        'lat_min_poi',
        'long_max_poi',
        'lat_max_poi',
    ];
    protected $dates =
    [
        'tgl_berangkat',
        'tgl_pulang',
        'created_at',
        'updated_at',
    ];


}
