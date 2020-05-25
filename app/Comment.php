<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function commentable(){
        return $this->morphTo();
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
}
