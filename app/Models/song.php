<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;

    protected $table = 'song';

    protected $fillable = [
        'id',
        'judul_lagu',
        'penyanyi',
        'tahun_rilis'
    ];
}
