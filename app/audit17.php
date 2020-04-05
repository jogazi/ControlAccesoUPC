<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit17 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idseating', 'idfunction', 'state',
    ];
}
