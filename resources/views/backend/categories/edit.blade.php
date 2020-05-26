@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm ">
  <h3>Edit category</h3>
</div> 
<form action="{{route('categories.update',['category'=>$category->id])}}" method="POST">
  <div class="form-group">
    <label for="name">Category</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Add category" value="{{$category->name}}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" name="description" id="description" rows="5">{{$category->description}}</textarea>
  </div>
  <button class="btn btn-primary">Update</button>
  {{@csrf_field()}}
  {{method_field('PUT')}}
</form>
@endsection