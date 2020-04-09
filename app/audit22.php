<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit22 extends Model
{
    protected $table = 'audit22';
    protected $primaryKey = 'idticketsale';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salevalue','saletime','idfunction','idpaytyp','id',
    ];
}
