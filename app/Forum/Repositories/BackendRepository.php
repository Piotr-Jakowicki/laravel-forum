<?php

namespace App\Forum\Repositories;

use App\Forum\Interfaces\BackendRepositoryInterface;
use App\{Category,Tag};

class BackendRepository implements BackendRepositoryInterface{
    public function getCategories(){
        return Category::get();
    }

    public function getTags(){
        return Tag::get();
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
}