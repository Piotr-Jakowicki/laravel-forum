@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm ">
  <h3>Add tag</h3>
</div> 
<form action="{{route('tags.store')}}" method="POST">
  <div class="form-group">
    <label for="name">Tag</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Add tag">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
  </div>
  <button class="btn btn-primary mt-4">Create</button>
  {{csrf_field()}}
</form>
@endsection