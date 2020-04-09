<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit15 extends Model
{
    protected $table = 'audit15';
    protected $primaryKey = 'idrooms';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'crows', 'columns', 'image',
    ];
}
