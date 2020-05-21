<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loteria extends Model
{
    protected $table = 'loteria';
    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'f1','f2','f3','carton','fecha',
    ];
}
