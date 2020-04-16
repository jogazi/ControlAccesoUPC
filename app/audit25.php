<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit25 extends Model
{
    protected $table = 'audit25';
    protected $primaryKey = 'idaudit25';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo','nombre','nofactura','valor','concepto',
    ];
}
