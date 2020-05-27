<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
    public function user(){
        return $this->belongsTo('App\Post');
    }

    public function tag(){
        return $this->belongsTo('App\Tag');
    }
}
