<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    protected $table = 'permohonan';
    protected $fillable = [
        'nik',
        'jenis_pengajuan',
        'kepentingan',
        'negara_tujuan',
        'keberangkatan',
        'kepulangan',
        'status_permohonan'
    ];
}
