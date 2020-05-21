<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roleuser extends Model
{
    protected $table = 'role_user';
    protected $primaryKey = 'id';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id','user_id','created_at','updated_at',
    ];
}
