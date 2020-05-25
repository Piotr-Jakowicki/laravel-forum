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
            <p class="lead">by <a href="{{route('user',['id'=>$post->id])}}">{{$post->user->name}}  {{$post->user->surname}}</a></p>
            <hr>
            <p>Posted on {{$post->created_at}}</p>
            <hr>
            <!-- TO DO IMG -->
            <img class="img-fluid rounded w-100" src="{{asset('images\post-pic2.jpg')}}" alt="">
            <hr>

            {{$post->content}}

            <hr>

            <div class="row">
              <div class="col-md-2">
                #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
            </div>
            <hr>
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group" role="group" aria-label="First group">
                <button type="button" class="btn btn-secondary">Like</button>
                <button type="button" class="btn btn-secondary">Dislike</button>
              </div>
              <div class="btn-group" role="group" aria-label="First group">
                <p class="mr-2">Likes: {{$post->users_l->count()}}</p> 
                <p>Dislikes: {{$post->users_d->count()}}</p> 
              </div>
            </div>
            <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                <h3>Comments</h3>
            </div>
            <div class="card my-4">
              <h5 class="card-header">Leave a Comment:</h5>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
                  <button type="button" class="btn btn-secondary">Like</button>
                  <button type="button" class="btn btn-secondary">Dislike</button>
                </div>
                <div class="btn-group" role="group" aria-label="First group">
                  <p class="mr-2">Likes: {{$comment->users_l->count()}}</p> 
                  <p>Disikes: {{$comment->users_d->count()}}</p> 
                </div>
              </div>
              @endforeach
                <div class="d-flex justify-content-center">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
              </div>
        </div>
    </div>
  </div>
@endsection   

