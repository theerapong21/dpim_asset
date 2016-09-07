<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_screen extends Model
{
    protected $guarded=['username'];
    protected $with=['user'];

    function user(){
    	return $this->belongsTo('App\User', 'create_by', 'username');
    }

}
