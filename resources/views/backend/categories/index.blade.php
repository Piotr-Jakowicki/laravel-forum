@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm justify-content-between">
  <h3>Categories</h3>
  <a href="{{route('categories.create')}}">Add new category</a> 
</div> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Categorie</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>{{Str::limit($category->description,50)}}</td>
        <td>
            <form action="{{route('categories.destroy',['category'=>$category->id])}}" method="POST" style="display: inline">
              <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
              {{method_field('DELETE')}}
              {{csrf_field()}}
            </form>
            <a href="{{route('categories.edit',['category'=>$category->id])}}" class="btn btn-secondary btn-sm">Edit</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection