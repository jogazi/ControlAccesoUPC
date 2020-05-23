<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit07 extends Model
{
    protected $table = 'audit07';
    protected $primaryKey = 'id_sys';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sys_act', 'sys_date','iduser',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }


    public function audit08()
    {
        return $this->belongsTo(audit08::class, 'id_sys', 'idsys');
    }

}
