<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit11 extends Model
{
    protected $table = 'audit11';
    protected $primaryKey = 'iddirecxfil';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iddirectors', 'idfilms',
    ];
}
