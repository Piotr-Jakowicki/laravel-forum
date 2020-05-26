@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm justify-content-between">
  <h3>Tags</h3>
  <a href="{{route('tags.create')}}">Add new tag</a> 
</div> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tag</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tags as $tag)
      <tr>
        <th scope="row">{{$tag->id}}</th>
        <td>{{$tag->name}}</td>
        <td>{{Str::limit($tag->description,50)}}</td>
        <td>
            <form action="{{route('tags.destroy',['tag'=>$tag->id])}}" method="POST" style="display: inline">
              <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
              {{method_field('DELETE')}}
              {{csrf_field()}}
            </form>
            <a href="{{route('tags.edit',['tag'=>$tag->id])}}" class="btn btn-secondary btn-sm">Edit</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection