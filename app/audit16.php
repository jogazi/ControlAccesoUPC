<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit16 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rows', 'columns', 'idrooms',
    ];
}
