<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit21 extends Model
{
    protected $table = 'audit21';
    protected $primaryKey = 'idpaytyp';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detpay',
    ];
}
