<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'ban',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function posts(){
        return $this->hasMany('App\Comment');
    }

    public function post_l(){
        return $this->morphedByMany('App\Post','likeable');
    }

    public function post_d(){
        return $this->morphedByMany('App\Post','dislikeable');
    }

    public function comment_l(){
        return $this->morphToMany('App\Comment','likeable');
    }

    public function comment_d(){
        return $this->morphToMany('App\Comment','dislikeable');
    }
}
