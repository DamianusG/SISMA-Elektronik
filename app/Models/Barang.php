<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Barang extends Model
{
    use softDeletes;
    protected $fillable = ['nama_barang','tipe_barang','deskripsi_barang','harga_barang','stok_barang']
    protected $hidden = [];
}
