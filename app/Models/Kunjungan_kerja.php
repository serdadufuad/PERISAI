<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class Kunjungan_kerja extends Model
{
    use Notifiable, HasFactory;
    protected $table = "kunjungan_kerja";
    protected $fillable = [
        //Data Form
        'data_titik',
        'long',
        'lat',
        'nama_vvip',
        'tgl_berangkat',
        'tgl_pulang',
        'nama_kegiatan',
        'file_ebook'
    ];
    protected $dates =
    [
        'tgl_berangkat',
        'tgl_pulang',
        'created_at',
        'updated_at',
    ];


}
