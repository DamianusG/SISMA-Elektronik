<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class User extends Model
{
    use softDeletes;
    protected $fillable = ['name','idRole','email','password'];
    protected $hidden = [];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
