<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draw extends Model
{
    
    public function session()
    {
        return $this->belongsTo('App\Session');
    }
    
    public function from()
    {
        return $this->hasOne('App\User');
    }
    
    public function to()
    {
        return $this->hasOne('App\User');
    }
    
}
