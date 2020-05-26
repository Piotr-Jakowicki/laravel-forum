<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function users(){
        return $this->morphToMany('App\User','likeable');
    }

    public function photos(){
        return $this->morphMany('App\Photo','photoable');
    }

    public function isLiked(){
        return $this->users()->where('user_id',Auth::user()->id)->exists();
    }
}
