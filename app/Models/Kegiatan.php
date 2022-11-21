<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Kegiatan extends Model
{
    use Notifiable, HasFactory;
    protected $table = "kegiatan";
    protected $fillable = [
        'kegiatan',
    ];
    protected $dates =
    [
        'created_at',
        'updated_at',
    ];
}
