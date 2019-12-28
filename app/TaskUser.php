<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    //
    protected $fillable = [
    	'task_id',
    	'user_id'

    ];

    public function comments(){
    	return $this->morphMany('App\Comment', 'commentable');
    }
}
