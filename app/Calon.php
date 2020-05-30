<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model 
{
    protected $table = 'calon';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'votes'
    ];
}
