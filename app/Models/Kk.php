<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;
    protected $table ='kk';
    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jk',
        'alamat',
        'status_sipil',
        'jenis_pekerjaan',
        'kewarganegaraan',
        'id_user'
    ];

   
}
