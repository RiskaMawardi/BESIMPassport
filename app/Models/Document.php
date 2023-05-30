<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table = 'document';
    protected $fillable = [
        'nik',
        'kk',
        'pathkk',
        'ktp',
        'pathktp',
        'akta',
        'pathakta',
        'dokumen_tambahan',
        'pathdoc',
        'id_document'
    ];
}
