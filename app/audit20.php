<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit20 extends Model
{
    protected $table = 'audit20';
    protected $primaryKey = 'idtrans';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transtable','audtranscol','transuser','transdate',
    ];
}
