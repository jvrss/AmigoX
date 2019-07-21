<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
    public function sessions()
    {
        return $this->hasMany('App\Session');
    }
    
    public function invites()
    {
        return $this->hasMany('App\Invite');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
    
    
    
}
