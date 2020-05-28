@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
    <h3>Profile</h3>
</div>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        /ul>
    </div>
@endif  
<form action="{{route('updateuser',['id'=>$user->id])}}" method="POST" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="tag">Name</label>
        <input type="text" class="form-control" id="tag" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label for="tag">Surname</label>
        <input type="text" class="form-control" id="tag" name="surname" value="{{$user->surname}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5">{{$user->description}}</textarea>
    </div>
    <h3>Add photos</h3>
    <div class="form-group">
        <input type="file" id="main-image" name="images[]" multiple>
        <label for="main-image">Photos</label>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Update</button>
    {{csrf_field()}}
</form>
<div class="col">
    <div class="row mt-5">
        @foreach($user->photos as $photo)
            <div class="col-md-2 mr-4 mb-4">
                <img class="img-thumbnail" src="{{$photo->path}}" alt="">
                <a href="{{route('deletephoto',['id'=>$photo->id])}}">Delete</a>
            </div>
        @endforeach
    </div>
</div>
@endsection

