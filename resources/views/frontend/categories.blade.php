@extends('layouts.frontend')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <img class="mr-3" src="..\\69045.png" alt="" width="48" height="48">
            <div class="lh-100">
                <h6 class="mb-0 lh-100">Category</h6>
                <small>PHP</small>
            </div>
            <div class="ml-5">
              Forum \ Categoris \ Posts
            </div>
          </div>
          <h1>Search</h1>
          <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Tile">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="User">
              </div>
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"><h6 class="text-center">Threat</h6></th>
                <th scope="col" style="min-width:100px"><h6 class="text-center">Posts</h6></th>
                <th scope="col" style="min-width:100px"><h6 class="text-center">Views</h6></th>
                <th scope="col" style="min-width:100px"><h6 class="text-center">Created at</h6></th>
                <th scope="col" style="min-width:100px"><h6 class="text-center">Modertor/Owner</h6></th>
              </tr>
            </thead>
            <?php for($i=0;$i<8;$i++): ?>
              <tbody>
                <tr>
                  <th scope="row">
                    <div class="media text-muted pt-3">
                      <img class="mr-3" src="..\\user.png" alt="" width="40" height="40">
                      <p class="media-body pb-3 mb-0 small lh-125">
                        <a href="../frontend/post.blade.php">Link to post</a>
                      </p>
                    </div>
                  </th>
                  <th><p class="pb-3 mb-0 small lh-125">142</p></th>
                  <th><p class="pb-3 mb-0 small lh-125">14242</p></th>
                  <th><p class="pb-3 mb-0 small lh-125">11/12/99 12:32</p></th>
                  <th>
                    <a href=""><img src="..\\delete3.png" alt="" width="45" height="45"></a>
                    <a href=""><img src="..\\delete2.png" alt="" width="45" height="45"></a>
                  </th>
                </tr>
              </tbody>
            <?php endfor; ?>
            </table>
            <img src="..\plus.png" alt="" height="20" width="20">
            <a href="..\frontend\newPost.blade.php">Add post</a>
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
        </div>
      </div>
    </div>
  </div>
@endsection

