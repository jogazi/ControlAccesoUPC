<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit19 extends Model
{
    protected $table = 'audit19';
    protected $primaryKey = 'iddettran';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idtrans', 'dtranfile', 'dtranvnew',
    ];
}
