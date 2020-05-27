@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
    <h3>Posts</h3>
</div>   
<h1>Finde your post</h1>
<form>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Tile">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Content">
        </div>
            <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>       
@foreach($user->posts as $post)
    <div class="media mb-2">
        <div class="media-body">
            <h5 class="mt-0"> <a href="..\frontend\user.blade.php">{{$post->title}}</a> </h5>
            <p>{{$post->created_at}}</p>
            {{Str::limit($post->content,100)}}
        </div>
    </div>
    <div class="btn-group pb-5" role="group" aria-label="First group">
        <a href="{{route('editpost',['id'=>$post->id])}}" class="btn btn-secondary">Edit</a>
        <a href="{{route('deletepost',['id'=>$post->id])}}" class="btn btn-secondary">Delete</a>
        
  </div>
@endforeach
@endsection

