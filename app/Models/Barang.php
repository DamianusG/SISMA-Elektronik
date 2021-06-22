<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Barang extends Model
{
    use softDeletes;
    protected $table = 'barang';
    protected $primaryKey = 'idBarang';
    protected $fillable = ['namaBarang','tipeBarang','deskripsiBarang','hargaBarang','stokBarang','slug'];
    protected $hidden = [];

    public function transaksiB()
    {
        return $this->belongsToMany(Transaksi::class);
    }
}
