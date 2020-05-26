<?php

namespace App\Forum\Repositories;

use App\{Category,Post,User,Photo,Comment};
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

    public function searchPostsByCategory($request){
        $posts = Post::with(['comments'])->where('title','LIKE','%'.$request->input('title').'%')->where('category_id',$request->input('category_id'))->paginate(8);

        $posts->appends([
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
        ]);

        return $posts;
    }

    public function getPostById($id){
        return Post::find($id);
    }

    public function getUserById($id){
        return User::find($id);
    }

    public function incrementViews(Post $post){
        $post->views++;
        $post->save();

        return $post;
    }

    public function addpost($request){
        return Post::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('description'),
            'views'=>0,
            'user_id'=>$request->user()->id,
            'category_id'=>$request->input('category'),
            'created_at'=>new \DateTime(),
        ]);
    }

    public function createPostPhoto(Post $post,$path){
        $photo = new Photo;
        $photo->path = $path;
        return $post->photos()->save($photo);
    }

    public function addcomment($commentable_id, $type, $request){
        return Comment::create([
            'content'=>$request->input('content'),
            'commentable_type'=>'App\\'.$type,
            'user_id'=>$request->user()->id,
            'commentable_id'=>$commentable_id,
            'created_at'=>new \DateTime(),
        ]);
    }

    public function like($likeabl_id, $type,$request){
        $type = 'App\\'.$type;
        $likeable = $type::find($likeabl_id);

        return $likeable->users()->attach($request->user()->id);
    }

    public function unlike($likeabl_id, $type,$request){
        $type = 'App\\'.$type;
        $likeable = $type::find($likeabl_id);

        return $likeable->users()->detach($request->user()->id);
    }
}