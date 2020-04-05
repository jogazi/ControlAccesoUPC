<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit12 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'duration','premiere','image',
    ];
}
