<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit09 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surnames','names', 'image',
    ];
}
