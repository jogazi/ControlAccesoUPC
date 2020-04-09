<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit05 extends Model
{
    protected $table = 'audit05';
    protected $primaryKey = 'idrol';

    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detrol',
    ];
}
