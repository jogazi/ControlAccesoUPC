<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit10 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idactor','idfilms',
    ];
}
