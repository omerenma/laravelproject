<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
         'email', 
         'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relating the User table with Tasks table
    

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function companies(){
        return $this->hasMany('App\Company');
    }

    public function tasks(){
        return $this->belongsToMany('App\Task');
    } 

     public function projects(){
        return $this->belongsToMany('App\Project');
    } 

    public function comment(){
        return $this->morphMany('App\Comment', 'commentable');
    }


}
