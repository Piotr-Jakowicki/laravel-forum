<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
        
    }

    public function categories(){
        return view('frontend.categories');
    }

    public function index(){
        return view('frontend.index');
    }

    public function newPost(){
        return view('frontend.newPost');
    }

    public function post(){
        return view('frontend.post');
    }

    public function user(){
        return view('frontend.user');
    }
}
