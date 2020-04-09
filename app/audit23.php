<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit23 extends Model
{
    public $table = "audit23";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'route1','extension1','size1','route2','extension2','size2','id',
    ];
}
