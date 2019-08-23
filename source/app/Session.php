<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    
    public $fillable = ['name', 'group_id'];
    
    public function group()
    {
        return $this->belongsTo('App\Group');
    }
    
    public function draws()
    {
        return $this->hasMany('App\Draw');
    }
    
}
