<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function posts(){
        return $this->hasMany('App\Post','category_id')->orderBy('created_at','desc');
    }
}
