<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventaris extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_inventaris';

    protected $fillable = [
        'nama_inventaris',
        'kode_inventaris',
        'harga',
        'tanggal',
        'ruangan',
        'keterangan',
    ];
}
