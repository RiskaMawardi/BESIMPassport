<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;
    protected $table = 'passport';
    protected $fillable = [
        'no_passport',
        'nik',
        'foto',
        'kode_negara',
        'tgl_pengeluaran',
        'batas_tgl',
        'kantor'
    ];
}
