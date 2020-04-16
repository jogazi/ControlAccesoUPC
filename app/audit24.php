<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit24 extends Model
{
    protected $table = 'audit24';
    protected $primaryKey = 'idaudit24';

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
