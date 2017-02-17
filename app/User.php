<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function post(){
        return $this->hasMany('App\Post');
    }

    public function isAdmin()
    {
        foreach ($this->role()->get() as $roles)
        {
            if ($roles->name == 'administrator')
            {
                return true;
            }
        }

        return false;
        
    }

}

