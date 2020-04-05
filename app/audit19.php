<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit19 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idtrans', 'dtranfile', 'dtranvnew',
    ];
}
