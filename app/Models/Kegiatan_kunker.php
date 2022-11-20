<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Kegiatan_kunker extends Model
{
    use Notifiable, HasFactory, HasRoles;
    protected $table = "kegiatan_kunker";
    protected $fillable = [
        'id_kegiatan',
        'id_kunker',
    ];
    protected $dates =
    [
        'created_at',
        'updated_at',
    ];
}
