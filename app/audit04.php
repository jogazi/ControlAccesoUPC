<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit04 extends Model
{
    protected $table = 'audit04';
    protected $primaryKey = 'idsubmod';

    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detsubmod', 'idmod',
    ];
}
