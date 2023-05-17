<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;
    protected $table ='kk';
    protected $fillable = [
        'no_kk',
        'nik',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jk',
        'alamt',
        'agama',
        'status_pernikahan',
        'pendidikan',
        'jenis_pekerjaan',
        'kewarganegaraan',
        'id_users'
    ];

}
