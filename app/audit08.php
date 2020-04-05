<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit08 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idsys','dsyscontroller', 'dsysmethod','dsysip','dsysbrowser',
    ];
}
