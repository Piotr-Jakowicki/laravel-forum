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
                    Forum \ Users \ Nickname
                </div>
            </div>
        <h1 class="mt-4">Nickname profile</h1>
        <hr>
        <p>Created at January 1, 2019 at 12:00 PM</p>
        <hr>
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h3>Images</h3>
        </div>
        <div class="col">
            <div class="row">
                <?php for($i=0;$i<6;$i++): ?>
                    <div class="col-md-2 mr-4 mb-4">
                        <img class="img-fluid img-thumbnail" src="..\user.png" alt="">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h3>Description</h3>
        </div>
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

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <hr>
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h3>Posts</h3>
        </div>

        <?php for($i=0;$i<3;$i++): ?>

            <div class="media mb-5">
                <div class="media-body">
                    <h5 class="mt-0"> <a href="..\frontend\user.blade.php">Post title</a> </h5>
                    <p>11/12/99 12:50</p>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum reiciendis nam officia dolorem perferendis ipsum quasi doloremque distinctio obcaecati nemo ullam consequatur, atque excepturi omnis, voluptatibus aliquam aspernatur eligendi quod id asperiores inventore incidunt. Velit temporibus expedita voluptates excepturi, iusto voluptatum facere aspernatur quibusdam molestiae enim eligendi quisquam vero voluptas cum veritatis doloribus quos maiores pariatur fugiat ipsum tenetur ea. Tempora quos accusamus illum ex! Nostrum blanditiis minus reprehenderit autem exercitationem repellat a, similique ipsa est, debitis perferendis iure minima nemo esse iste doloremque quae! In ipsum assumenda quidem, quod veritatis placeat voluptas, qui molestiae, ad non eaque vero!
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
@endsection
