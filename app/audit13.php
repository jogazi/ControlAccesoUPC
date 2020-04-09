<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit13 extends Model
{
    protected $table = 'audit13';
    protected $primaryKey = 'iddirectors';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surnames', 'names', 'image',
    ];
}
