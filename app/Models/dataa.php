<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataa extends Model
{
    protected $table = 'map';
    protected $fillable = [
        'lat_long',
        'nama_tempat',
        'kategori',
        'keterangan',
    ];
    use HasFactory;
}
