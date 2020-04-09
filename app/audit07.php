<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit07 extends Model
{
    protected $table = 'audit07';
    protected $primaryKey = 'idsys';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sys_act', 'sys_date','iduser',
    ];
}
