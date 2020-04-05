<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit20 extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transtable','audtranscol','transuser','transdate',
    ];
}
