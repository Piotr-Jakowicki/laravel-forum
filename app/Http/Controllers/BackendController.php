<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('backend.index');
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
        return view('backend.profile');
    }
}
