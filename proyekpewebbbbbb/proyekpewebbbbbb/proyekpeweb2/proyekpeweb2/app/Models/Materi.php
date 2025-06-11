<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materis'; // nama tabel di database

    protected $fillable = [
        'judul',
        'deskripsi',
        'file',
        'link_video',
        // tambahkan field lain jika nanti kamu ingin menyimpan file, video, dll
    ];
}
