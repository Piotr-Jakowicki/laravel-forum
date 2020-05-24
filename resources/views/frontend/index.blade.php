@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                <img class="mr-3" src="{{asset('images/69045.png')}}" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 lh-100">Forum</h6>
                    <small>For developers</small>
                </div>
                <div class="ml-5">
                    Forum \ Categoris 
                </div>
            </div>
        </div>
        <div class="col-md-9">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="min-width:400px"><h6 class="text-center">Categories</h6></th>
                        <th scope="col"><h6 class="text-center">Posts</h6></th>
                        <th scope="col"><h6 class="text-center">Lates post</h6></th>
                    </tr>
                </thead>
                @foreach($categories as $category)
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="media text-muted pt-3">
                                <img class="mr-3" src="{{asset('images/69045.png')}}" alt="" width="20" height="20">
                                <p class="media-body pb-3 mb-0 small lh-125">
                                    <a href="{{route('categories')}}">{{$category->name}}</a>
                                    <br>
                                    {{$category->description}}
                                </p>
                                </div>
                            </th>
                            <th><p class="pb-3 mb-0 small lh-125">{{$category->posts->count()}}</p></th>
                            <th><p class="pb-3 mb-0 small lh-125"> <a href="{{route('post')}}">{{$category->posts->first()->title}}</a>  <br> {{$category->posts->first()->created_at}}</p></th>
                        </tr>
                    </tbody>
                @endforeach
                </table>
                <div class="d-flex justify-content-center">
                    {{$categories->links()}}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <h5 class="card-title text-center card-header">
                    Popularne
                </h5>
                <div class="card-body">
                    <ul>
                        @foreach($posts['popular'] as $post)
                        <li>
                            <a href="{{route('post')}}" class="card-link ">{{$post->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                    <h5 class="card-title text-center card-header">
                        Nowe
                    </h5>
                    <div class="card-body">
                    <ul>
                        @foreach($posts['newest'] as $post)
                            <li>
                                <a href="{{route('post')}}" class="card-link">{{$post->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                    <h5 class="card-title text-center card-header">
                        Losowe
                    </h5>
                    <div class="card-body">
                    <ul>
                        @foreach($posts['random'] as $post)
                            <li>
                                <a href="{{route('post')}}" class="card-link">{{$post->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
