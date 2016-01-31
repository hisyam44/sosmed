<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $table = 'stats';

    protected $fillable = ['user_id','content','publish_at'];

    protected $dates = ['published_at'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}
