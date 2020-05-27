<?php

namespace App\Forum\Repositories;

use App\Forum\Interfaces\BackendRepositoryInterface;
use App\{Category,Tag,User,Post,Post_tag};

class BackendRepository implements BackendRepositoryInterface{
    public function getCategories(){
        return Category::get();
    }

    public function getTags(){
        return Tag::get();
    }

    public function getPost($id){
        return Post::find($id);
    }

    public function createCategory($request){
        return Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
    }

    public function createTag($request){
        return Tag::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
    }

    public function getCategoryById($id){
        return Category::find($id);
    }

    public function getTagById($id){
        return Tag::find($id);
    }

    public function updateCategory($request, $id){
        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
    }

    public function updateTag($request, $id){
        $tag = Tag::find($id);

        $tag->name = $request->input('name');
        $tag->description = $request->input('description');
        $tag->save();
    }

    public function deleteCategory($id){
        return Category::where('id',$id)->delete();
    }

    public function deleteTag($id){
        return Tag::where('id',$id)->delete();
    }

    public function getUser($id){
        return User::with([
            'posts'=>function($q){
                $q->orderBy('created_at','desc');
            }
        ])->find($id);
    }

    public function updatePost($request, $id){
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->content = $request->input('description');
        $post->category_id = $request->input('category');
        $post->save();
    }

    public function deletePostTags($id){
        return Post_tag::where('post_id',$id)->delete();
    }

    public function deletePost($id){
        return Post::find($id)->delete();
    }

    public function addPostTags($request, $id){
        $tags = [];
        $old_tags = $request->input('tags');
        foreach($old_tags as $tag){
            $tags[] = [
                'post_id'=>$id,
                'tag_id'=>$tag,
            ];
        }

        return Post_tag::insert($tags);
    }
}