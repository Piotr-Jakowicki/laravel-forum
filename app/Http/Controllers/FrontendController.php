<?php

namespace App\Http\Controllers;

use App\Forum\Gateways\FrontendGateway;
use App\Forum\Interfaces\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct(FrontendRepositoryInterface $fR, FrontendGateway $fG)
    {
        $this->middleware('auth')->only('newpost');

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

    public function newpost(){
        $categories = $this->fR->getCategories();

        return view('frontend.newPost',['categories'=>$categories]);
    }

    public function post($id){
        $post = $this->fR->getPostById($id);

        $this->fR->incrementViews($post);

        return view('frontend.post',['post'=>$post]);
    }

    public function user($id){
        $user = $this->fR->getUserById($id);

        return view('frontend.user',['user'=>$user]);
    }

    public function addpost(Request $request){
        $this->fG->addpost($request);

        return redirect()->back();
    }
}
