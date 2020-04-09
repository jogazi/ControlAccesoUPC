<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit08 extends Model
{
    protected $table = 'audit08';
    protected $primaryKey = 'idauddsys';

    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idsys','dsyscontroller', 'dsysmethod','dsysip','dsysbrowser',
    ];
}
