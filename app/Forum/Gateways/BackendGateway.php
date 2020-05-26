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

    public function updateCategory($request, $id){
        $this->validate($request,[
            'name' => 'required|string|unique:categories',
            'description' => 'required|string|min:10',
        ]);

        return $this->bR->updateCategory($request, $id); 
    }
}