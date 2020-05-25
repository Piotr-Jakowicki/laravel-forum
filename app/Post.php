<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function users_l(){
        return $this->morphToMany('App\User','likeable');
    }

    public function users_d(){
        return $this->morphToMany('App\User','dislikeable');
    }

    public function photos(){
        return $this->morphMany('App\Photo','photoable');
    }
}
