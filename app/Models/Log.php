<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $tabel = 'logs';

    protected $fillable=[
    	'user_id', 'action',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User','user_id','id');
    }
}
