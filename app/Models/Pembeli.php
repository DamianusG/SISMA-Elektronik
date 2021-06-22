<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Pembeli extends Model
{
    use softDeletes;
    protected $table = 'pembeli';
    protected $primaryKey = 'idPembeli';
    protected $fillable = ['namaPembeli','noTelp','alamat','slug'];
    protected $hidden = [];

    public function transaksiP()
    {
        return $this->hasMany(Transaksi::class);
    }
}
