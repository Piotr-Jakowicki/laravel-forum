<?php

namespace App\Http\Controllers;

use App\Forum\Gateways\FrontendGateway;
use App\Forum\Interfaces\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct(FrontendRepositoryInterface $fR, FrontendGateway $fG)
    {
        $this->fR = $fR;
        $this->fG = $fG;
    }

    public function categories($id){
        $posts = $this->fR->getPosts($id);

        return view('frontend.categories',['posts'=>$posts]);
    }

    public function index(){
        $categories  = $this->fR->getCategories();
        $posts = $this->fR->getPostsForFrontPage();

        return view('frontend.index',compact('categories','posts'));
    }

    public function newPost(){
        return view('frontend.newPost');
    }

    public function post($id){
        $post = $this->fR->getPostById($id);

        return view('frontend.post',['post'=>$post]);
    }

    public function user(){
        return view('frontend.user');
    }
}
