@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
    <h3>Profile</h3>
</div>  
<form>
    <div class="form-group">
        <label for="tag">Name</label>
        <input type="text" class="form-control" id="tag" name="tag" value="Name">
    </div>
    <div class="form-group">
        <label for="tag">Surname</label>
        <input type="text" class="form-control" id="tag" name="tag" value="Name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis harum dolor nulla cum ex iusto id voluptate quo beatae doloremque.</textarea>
    </div>
    <button class="btn btn-primary mt-4">Create</button>
    <h3>Add photos</h3>
    <div class="form-group">
        <input type="file" id="main-image" multiple>
        <label for="main-image">Photos</label>
    </div>
</form>
<div class="col">
    <div class="row mt-5">
        <?php for($i=0;$i<6;$i++): ?>
            <div class="col-md-2 mr-4 mb-4">
                <img class="img-fluid img-thumbnail" src="..\user.png" alt="">
                <a href="">Delete</a>
            </div>
        <?php endfor; ?>
    </div>
</div>
@endsection

