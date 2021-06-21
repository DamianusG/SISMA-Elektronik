<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Transaksi extends Model
{
    use softDeletes;
    protected $fillable = ['idPembeli','user_id','statusTransaksi','totalTransaksi']
    protected $hidden = [];

    public function barang()
    {
        return $this->belongsToMany(Barang::class);
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }

}
