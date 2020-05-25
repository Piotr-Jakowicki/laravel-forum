<?php

namespace App\Http\Controllers;

use App\Forum\Gateways\FrontendGateway;
use App\Forum\Interfaces\FrontendRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function search(Request $request){
        $posts = $this->fR->searchPostsByCategory($request);

        return view('frontend.categories',compact('posts','request'));
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
        $post = $this->fG->addpost($request);

        if($request->hasFile('main-image')){
            $path = $request->file('main-image')->store('posts','public');

            $this->fR->createPostPhoto($post,$path);
        }

        return redirect()->route('post',[$post->id]);
    }

    public function addcomment(Request $request){
        $this->fG->addcomment($request);

        return redirect()->back();
    }
}
