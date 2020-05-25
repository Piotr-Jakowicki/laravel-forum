<?php

namespace App\Forum\Gateways;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Forum\Interfaces\FrontendRepositoryInterface;

class FrontendGateway{
    use ValidatesRequests;

    public function __construct(FrontendRepositoryInterface $fR)
    {
        $this->fR = $fR;
    }

    public function addpost($request){
        $this->validate($request,[
            'title' => 'required|string|min:10',
            'description' => 'required|string|min:100',
            'main-image'=>'image|max:100',
            'category'=>'required|integer'
        ]);

        return $this->fR->addpost($request);
    }
}