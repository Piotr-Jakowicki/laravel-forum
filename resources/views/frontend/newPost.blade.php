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
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Add title">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category">
                            <option>PHP</option>
                            <option>Java</option>
                            <option>Python</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags multiple select</label>
                        <select multiple class="form-control" id="tags">
                            <option>Validation</option>
                            <option>Bug</option>
                            <option>Validation</option>
                            <option>Bug</option>
                            <option>Validation</option>
                            <option>Bug</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" rows="10"></textarea>
                    </div>
                    <div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" id="main-image">
                        <label class="custom-file-label" for="main-image">Main image (Only one)</label>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="main-image" multiple>
                        <label class="custom-file-label" for="main-image">Other images</label>
                    </div>
                    <button class="btn btn-primary mt-4">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
