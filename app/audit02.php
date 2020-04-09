<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit02 extends Model
{
    protected $table = 'audit02';
    protected $primaryKey = 'idperm';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action','idmod','idrol',
    ];
}
