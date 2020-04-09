<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit16 extends Model
{
    protected $table = 'audit16';
    protected $primaryKey = 'idseating';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'row', 'number', 'idrooms',
    ];
}
