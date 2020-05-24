@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
    <h3>Posts</h3>
</div>   
<h1>Finde your post</h1>
<form>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Tile">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Content">
        </div>
            <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>       
<?php for($i=0;$i<7;$i++): ?>
    <div class="media mb-2">
        <div class="media-body">
            <h5 class="mt-0"> <a href="..\frontend\user.blade.php">Post title</a> </h5>
            <p>11/12/99 12:50</p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum reiciendis nam officia dolorem perferendis Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum reiciendis nam officia dolorem perferendisLorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum reiciendis nam officia dolorem perferendis
        </div>
    </div>
    <div class="btn-group pb-5" role="group" aria-label="First group">
        <button type="button" class="btn btn-secondary">Edit</button>
        <button type="button" class="btn btn-secondary">Delete</button>
  </div>
<?php endfor; ?>
@endsection

