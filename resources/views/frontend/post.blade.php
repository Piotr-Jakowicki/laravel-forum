@extends('layouts.frontend')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                <img class="mr-3" src="..\\69045.png" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 lh-100">Post</h6>
                    <small>User nickname</small>
                </div>
                <div class="ml-5">
                    Forum \ Categoris \ Posts \ 4848 ?? Title
                </div>
            </div>
            <h1 class="mt-4">Post Title</h1>
            <p class="lead">by<a href="#">User</a></p>
            <hr>
            <p>Posted on January 1, 2019 at 12:00 PM</p>
            <hr>
            <img class="img-fluid rounded w-100" src="..\post-pic2.jpg" alt="">
            <hr>

            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in
                <cite title="Source Title">Source Title</cite>
              </footer>
            </blockquote>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

            <hr>

            <div class="row">
              <div class="col-md-2">
                #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
              <div class="col-md-2">
              #TAG
              </div>
            </div>
            <hr>
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group" role="group" aria-label="First group">
                <button type="button" class="btn btn-secondary">Like</button>
                <button type="button" class="btn btn-secondary">Dislike</button>
              </div>
              <div class="btn-group" role="group" aria-label="First group">
                <p class="mr-2">Likes: 100</p> 
                <p>Disikes: 100</p> 
              </div>
            </div>
            <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                <h3>Comments</h3>
            </div>
            <div class="card my-4">
              <h5 class="card-header">Leave a Comment:</h5>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
            <?php for($i=0;$i<3;$i++): ?>
              <div class="media mb-2">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0"> <a href="..\frontend\user.blade.php">Commenter Name</a> </h5>
                    <p>11/12/99 12:50</p>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum reiciendis nam officia dolorem perferendis ipsum quasi doloremque distinctio obcaecati nemo ullam consequatur, atque excepturi omnis, voluptatibus aliquam aspernatur eligendi quod id asperiores inventore incidunt. Velit temporibus expedita voluptates excepturi, iusto voluptatum facere aspernatur quibusdam molestiae enim eligendi quisquam vero voluptas cum veritatis doloribus quos maiores pariatur fugiat ipsum tenetur ea. Tempora quos accusamus illum ex! Nostrum blanditiis minus reprehenderit autem exercitationem repellat a, similique ipsa est, debitis perferendis iure minima nemo esse iste doloremque quae! In ipsum assumenda quidem, quod veritatis placeat voluptas, qui molestiae, ad non eaque vero!
                </div>
              </div>
              <div class="btn-toolbar justify-content-between mb-5" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                  <button type="button" class="btn btn-secondary">Like</button>
                  <button type="button" class="btn btn-secondary">Dislike</button>
                </div>
                <div class="btn-group" role="group" aria-label="First group">
                  <p class="mr-2">Likes: 100</p> 
                  <p>Disikes: 100</p> 
                </div>
              </div>
              <?php endfor; ?>
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
@endsection   

