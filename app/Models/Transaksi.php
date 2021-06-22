<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Transaksi extends Model
{
    use softDeletes;
    protected $table = 'transaksi';
    protected $primaryKey = 'idTransaksi';
    protected $fillable = ['idPembeli','user_id','statusTransaksi','totalTransaksi','slug'];
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
