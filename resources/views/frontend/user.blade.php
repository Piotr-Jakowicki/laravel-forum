@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                    <img class="mr-3" src="{{asset('images\69045.png')}}" alt="" width="48" height="48">
                <div class="lh-100">
                <h6 class="mb-0 lh-100">Post</h6>
                <small>{{$user->name}} {{$user->surname}}</small>
                </div>
                <div class="ml-5">
                    Forum \ Users \ {{$user->name}} {{$user->surname}}
                </div>
            </div>
        <h1 class="mt-4">{{$user->name}} {{$user->surname}} profile</h1>
        <hr>
        <p>Created at {{$user->created_at}}</p>
        <hr>
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h3>Images</h3>
        </div>
        <div class="col">
            <div class="row">
                <?php for($i=0;$i<6;$i++): ?>
                    <!-- TO DO IMAGES -->
                    <div class="col-md-2 mr-4 mb-4">
                        <img class="img-fluid img-thumbnail" src="{{asset('images\user.png')}}" alt="">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h3>Description</h3>
        </div>
        
            {{$user->description}}

        <hr>
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h3>Posts</h3>
        </div>

        @foreach($user->posts as $post)

            <div class="media mb-5">
                <div class="media-body">
                    <h5 class="mt-0"> <a href="{{route('post',['id'=>$post->id])}}">{{$post->title}}</a> </h5>
                    <p>{{$post->created_at}}</p>
                    <br>
                    {{Str::limit($post->content,200)}}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
