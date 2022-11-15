<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Kunjungan_kerja extends Model
{
    use Notifiable, HasFactory, Notifiable, HasRoles;
    protected $table = "kunjungan_kerja";
    protected $fillable = [
        'long',
        'lat',
        'kategori_kunjungan',
        'vvip',
        'id_provinsi',
        'tgl_berangkat',
        'tgl_pulang',
        'file_ebook',
    ];
    protected $dates =
    [
        'tgl_berangkat',
        'tgl_pulang',
        'created_at',
        'updated_at',
    ];

}
