<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['user_id','stat_id','content','published_at'];

    protected $dates = ['published_at'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function stat(){
    	return $this->belongsto('App\Stat');
    }
}
