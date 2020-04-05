<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit01 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dateofbirth', 'address', 'frstnam','scondnam', 'frstlstnam', 'scondlstnam','numphone',
    ];
}
