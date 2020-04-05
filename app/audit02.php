<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit02 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action','idmod','idrol',
    ];
}
