<?php

namespace App\Forum\Repositories;

use App\Forum\Interfaces\BackendRepositoryInterface;
use App\Category;

class BackendRepository implements BackendRepositoryInterface{
    public function getCategories(){
        return Category::get();
    }

    public function createCategory($request){
        return Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
    }

    public function getCategoryById($id){
        return Category::find($id);
    }

    public function updateCategory($request, $id){
        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
    }

    public function deleteCategory($id){
        return Category::where('id',$id)->delete();
    }
}