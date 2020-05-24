@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm justify-content-between">
  <h3>Categories</h3>
  <a href="">Add new category</a> 
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
    <?php for($i=0;$i<20;$i++): ?>
      <tr>
        <th scope="row">1</th>
        <td>Lorem</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, blanditiis.</td>
        <td>
            <button>Delete</button>
            <button>Edit</button>
        </td>
      </tr>
    <?php endfor; ?>
  </tbody>
</table>
<div class="d-flex justify-content-center">
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
</div>
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm ">
  <h3>Add category</h3>
</div> 
<form>
  <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" id="category" placeholder="Add category">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
  </div>
  <button class="btn btn-primary mt-4">Create</button>
</form>
@endsection

