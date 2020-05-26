<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    protected $guarded = [];

    public function commentable(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function users(){
        return $this->morphToMany('App\User','likeable');
    }
    
    public function isLiked(){
        return $this->users()->where('user_id',Auth::user()->id)->exists();
    }
}
