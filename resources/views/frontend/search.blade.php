@extends('layouts.frontend')

@section('content')
  
            @foreach($posts as $post)
              
                        {{$post->title}}
                      
            @endforeach
            
              {{$posts->appends(['title' => $request->input('title')])->links()}}
          
@endsection