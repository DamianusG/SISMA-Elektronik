<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = ['name','idRole','email','password'];
    protected $hidden = [];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
