<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    protected $fillable  = ['stat_id','count'];

    public function stat(){
    	return $this->belongsTo('App\Stat');
    }
}
