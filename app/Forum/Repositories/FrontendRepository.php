<?php

namespace App\Forum\Repositories;

use App\{Category,Post};
use App\Forum\Interfaces\FrontendRepositoryInterface;
use Illuminate\Support\Facades\DB;

class FrontendRepository implements FrontendRepositoryInterface{
    public function getCategories(){
        return Category::with(['posts'])->paginate(8);
    }
    public function getPostsForFrontPage(){
        $posts = [];
        $posts['newest'] = Post::orderBy('created_at','desc')->take(10)->get();
        $posts['popular'] = Post::orderBy('views','asc')->take(10)->get();
        $posts['random'] = Post::inRandomOrder()->take(3)->get();

        return $posts;
    }
}