<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit23 extends Model
{
    protected $table = 'audit23';
    protected $primaryKey = 'idfile';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'route1','extension1','size1','route2','extension2','size2','id',
    ];
}
