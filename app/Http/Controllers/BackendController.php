<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum\Interfaces\BackendRepositoryInterface;
use App\Forum\Gateways\BackendGateway;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BackendController extends Controller
{
    public function __construct(BackendGateway $bG, BackendRepositoryInterface $bR)
    {
        $this->bG = $bG;
        $this->bR = $bR;
    }
    public function index(Request $request){
        if($request->input('title') != null){
            $user = $this->bR->searchUserPosts($request, Auth::user()->id);
        } else {
            $user = $this->bR->getUserPosts(Auth::user()->id);
        }
        return view('backend.index',['user'=>$user]);
    }

    public function settings(){
        //
    }

    public function categories(){
        return view('backend.categories');
    }

    public function tags(){
        return view('backend.tags');
    }

    public function banned(){
        return view('backend.banned');
    }

    public function profile(){
        return view('backend.profile',['user'=>Auth::user()]);
    }

    public function editpost($id){
        $categories = $this->bR->getCategories();
        $tags = $this->bR->getTags();
        $post = $this->bR->getPost($id);
        return view('backend.editpost',compact('categories','tags','post'));
    }

    public function updatepost(Request $request, $id){
        $this->bG->updatePost($request, $id);
        $this->bR->deletePostTags($id);
        if($request->input('tags') != null){
            $this->bR->addPostTags($request, $id);
        }
        
        /*
        if($request->hasFile('main-image')){
            $path = $request->file('main-image')->store('posts','public');

            $this->fR->createPostPhoto($post,$path);
        }
        */
        return redirect()->route('dashboard');
    }

    public function updateuser(Request $request, $id){
        $this->bG->updateUser($request, $id);

        return redirect()->back();
    }
    
    public function deletepost($id){
        $this->bR->deletePost($id);

        return redirect()->route('dashboard');
    }
    
    public function deletephoto($id){
        $photo = $this->bR->findPhoto($id);

        $path = $this->bR->deletePhoto($photo);

        Storage::disk('public')->delete($path);

        return redirect()->back();
    }
}
