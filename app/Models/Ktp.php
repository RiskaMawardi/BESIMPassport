<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;

    protected $table = 'ktp';
    protected $fillable = [
        'nik',
        'no_kk',
        'goldar',
        'foto'
    ];
}
