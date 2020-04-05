<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit07 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sys_act', 'sys_date','iduser',
    ];
}
