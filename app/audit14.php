<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit14 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time', 'price','idrooms','idfilms',
    ];
}
