@extends('layouts.frontend')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                <img class="mr-3" src="{{asset('images/69045.png')}}" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 lh-100">Post</h6>
                    <small>{{$post->user->name}}  {{$post->user->surname}}</small>
                </div>
                <div class="ml-5">
                    Forum \ Categoris \ Posts \ {{$post->title}}
                </div>
            </div>
            <h1 class="mt-4">{{$post->title}}</h1>
            <p class="lead">by <a href="{{route('user',['id'=>$post->user->id])}}">{{$post->user->name}}  {{$post->user->surname}}</a></p>
            <hr>
            <p>Posted on {{$post->created_at}}</p>
            
            <hr>
            <!-- TO DO IMG -->
            @isset($post->photos->first()->path)
            <img class="img-fluid rounded w-100" src="{{asset($post->photos->first()->path)}}" alt="">
            <hr>
            @endisset
            {{$post->content}}

            <hr>

            <div class="row">
              @foreach($post->tags as $tag)
              <div class="col-md-2">
                #{{$tag->tag->name}}
              </div>
              @endforeach
            </div>
            <hr>
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group" role="group" aria-label="First group">
                @if($post->isLiked())
                <a href="{{route('unlike',['likeable_id'=>$post->id,'Post'])}}" class="btn btn-secondary">Unlike</a>
                @else
                <a href="{{route('like',['likeable_id'=>$post->id,'Post'])}}" class="btn btn-secondary">Like</a>
                @endif
              </div>
              <div class="btn-group" role="group" aria-label="First group">
                <p class="mr-2">Likes: {{$post->users->count()}}</p>  
              </div>
            </div>
            <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                <h3>Comments</h3>
            </div>
            @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <div class="card my-4">
              <h5 class="card-header">Leave a Comment:</h5>
              <div class="card-body">
                <form action="{{route('addcomment',['commentable_id'=>$post->id,'Post'])}}" method="POST">
                  <div class="form-group">
                    <textarea class="form-control" rows="3" name="content"></textarea>
                  </div>
                  @auth
                    <button type="submit" class="btn btn-primary">Submit</button>
                  @else 
                    <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                  @endauth
                  {{csrf_field()}}
                </form>
              </div>
            </div>
            @foreach($post->comments as $comment)
              <div class="media mb-2">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0"> <a href="{{route('user',['id'=>$comment->user->id])}}">{{$comment->user->name}}</a> </h5>
                    <p>{{$comment->created_at}}</p>
                    <br>
                    {{$comment->content}}
                </div>
              </div>
              <div class="btn-toolbar justify-content-between mb-5" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                  @if($comment->isLiked())
                    <a href="{{route('unlike',['likeable_id'=>$comment->id,'Comment'])}}" class="btn btn-secondary">Unlike</a>
                  @else
                    <a href="{{route('like',['likeable_id'=>$comment->id,'Comment'])}}" class="btn btn-secondary">Like</a>
                  @endif
                </div>
                <div class="btn-group" role="group" aria-label="First group">
                  <p class="mr-2">Likes: {{$comment->users->count()}}</p> 
                </div>
              </div>
              @endforeach
        </div>
    </div>
  </div>
@endsection   

