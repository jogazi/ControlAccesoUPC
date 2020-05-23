<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit09 extends Model
{
    protected $table = 'audit09';
    protected $primaryKey = 'idactors';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname','name', 'image',
    ];
}
