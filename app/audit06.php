<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit06 extends Model
{
    protected $table = 'audit06';
    protected $primaryKey = 'idprof';

    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state', 'idrol',
    ];
}
