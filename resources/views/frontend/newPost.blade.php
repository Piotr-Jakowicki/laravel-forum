@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                    <img class="mr-3" src="{{asset('images/69045.png')}}" alt="" width="48" height="48">
                    <div class="lh-100">
                        <h6 class="mb-0 lh-100">Post</h6>
                        <small>New \ Edit</small>
                    </div>
                    <div class="ml-5">
                        Forum \ Categories \ Posts \ (New \ Edit)
                    </div>
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
                <form action="{{route('addpost')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Add title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            @foreach($categories as $category)
                                @if(old('category') == $category))
                                    <option selected value="{{$category->id}}">{{$category->name}}</option>
                                @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags multiple select</label>
                        <select multiple="multiple" class="form-control" id="tags" name="tags[]">
                            @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="description" rows="10">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="main-image">Photos</label>
                        <input type="file" name="main-image" id="main-image">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Create</button>
                    {{@csrf_field()}}
                </form>
            </div>
        </div>
    </div>
@endsection
