<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model 
{
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'npm', 'password', 'token'
    ];
}
