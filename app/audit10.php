<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit10 extends Model
{
    protected $table = 'audit10';
    protected $primaryKey = 'idactorxfil';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idactor','idfilms',
    ];
}
