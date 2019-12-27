<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
    	'name',
    	'user_id',
    	'days',
    	'hours',
    	'project_id',
    	'company_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    } 

    public function project(){
        return $this->belongsTo('App\Project');
    } 

    public function company(){
        return $this->belongsTo('App\Company');
    } 

      public function users(){
        return $this->belongsToMany('App\User');
    }
}
