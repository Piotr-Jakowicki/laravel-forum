<?php

namespace App\Forum\Gateways;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Forum\Interfaces\BackendRepositoryInterface;

class BackendGateway{
    use ValidatesRequests;

    public function __construct(BackendRepositoryInterface $bR)
    {
        $this->bR = $bR;
    }

    public function createCategory($request){
        $this->validate($request,[
            'name' => 'required|string|unique:categories',
            'description' => 'required|string|min:10',
        ]);

        return $this->bR->createCategory($request); 
    }

    public function createTag($request){
        $this->validate($request,[
            'name' => 'required|string|unique:tags',
            'description' => 'required|string|min:10',
        ]);

        return $this->bR->createTag($request); 
    }

    public function updateCategory($request, $id){
        $this->validate($request,[
            'name' => 'required|string|unique:categories',
            'description' => 'required|string|min:10',
        ]);

        return $this->bR->updateCategory($request, $id); 
    }

    public function updateTag($request, $id){
        $this->validate($request,[
            'name' => 'required|string|unique:categories',
            'description' => 'required|string|min:10',
        ]);

        return $this->bR->updateTag($request, $id); 
    }

    public function updatepost($request, $id){
        $this->validate($request,[
            'title' => 'required|string|min:10',
            'description' => 'required|string|min:100',
        ]);

        return $this->bR->updatePost($request, $id);
    }

    public function updateUser($request, $id){
        $this->validate($request,[
            'name' => 'required|string|',
            'surname' => 'required|string',
            'description' => 'string',
        ]);

        $user = $this->bR->updateUser($request, $id);

        if($request->hasFile('images')){
            $this->validate($request, \App\Photo::imageRules($request,'images'));

            foreach($request->file('images') as $picture){
                $path = $picture->store('Users','public');

                $this->bR->saveUserImage($user, $path);
            }
        }

        return $user;
    }
}