@extends('layouts.backend')

@section('content')
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
                <form action="{{route('updatepost',['id'=>$post->id])}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" value="{{old('title')}}">
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
                            @foreach($post->tags as $post_tag)
                                <?php $post_tags[] = $post_tag->tag_id;?>
                            @endforeach
                            @if(isset($post_tags))
                                @foreach($tags as $tag)
                                    @if(in_array($tag->id,$post_tags))
                                        <option value="{{$tag->id}}" selected>{{$tag->name}}</option>
                                    @else
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endif
                                @endforeach
                            @else
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="description" rows="10">{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="main-image">Photos</label>
                        <input type="file" name="main-image" id="main-image">
                    </div>
                    <!-- TO DO  -->
                    <button type="submit" class="btn btn-primary mt-4">Create</button>
                    {{@csrf_field()}}
                </form>
@endsection