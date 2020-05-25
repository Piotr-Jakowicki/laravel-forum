<?php

namespace App\Forum\Repositories;

use App\{Category,Post,User};
use App\Forum\Interfaces\FrontendRepositoryInterface;

class FrontendRepository implements FrontendRepositoryInterface{
    public function getCategories(){
        return Category::with(['posts'])->paginate(8);
    }
    
    public function getPostsForFrontPage(){
        $posts['newest'] = Post::orderBy('created_at','desc')->take(10)->get();
        $posts['popular'] = Post::orderBy('views','asc')->take(10)->get();
        $posts['random'] = Post::inRandomOrder()->take(3)->get();

        return $posts;
    }

    public function getPosts($id){
        return Post::with(['comments'])->where('category_id',$id)->paginate(8);
    }

    public function getPostById($id){
        return Post::find($id);
    }

    public function getUserById($id){
        return User::find($id);
    }
}