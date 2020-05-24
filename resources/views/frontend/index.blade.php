@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
                <img class="mr-3" src="..\\69045.png" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 lh-100">Forum</h6>
                    <small>For developers</small>
                </div>
                <div class="ml-5">
                    Forum \ Categoris 
                </div>
            </div>
        </div>
        <div class="col-md-9">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="min-width:400px"><h6 class="text-center">Categories</h6></th>
                        <th scope="col"><h6 class="text-center">Threats</h6></th>
                        <th scope="col"><h6 class="text-center">Posts</h6></th>
                    </tr>
                </thead>
                <?php for($i=0;$i<8;$i++): ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="media text-muted pt-3">
                                <img class="mr-3" src="..\\69045.png" alt="" width="20" height="20">
                                <p class="media-body pb-3 mb-0 small lh-125">
                                    <a href="{{route('categories')}}">Link to category</a>
                                    <br>
                                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                </p>
                                </div>
                            </th>
                            <th><p class="pb-3 mb-0 small lh-125">142</p></th>
                            <th><p class="pb-3 mb-0 small lh-125">142</p></th>
                        </tr>
                    </tbody>
                <?php endfor; ?>
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
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <h5 class="card-title text-center card-header">
                    Popularne
                </h5>
                <div class="card-body">
                    <ul>
                        <?php for($i=0;$i<10;$i++): ?>
                        <li>
                            <a href="{{route('post')}}" class="card-link ">Card link</a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                    <h5 class="card-title text-center card-header">
                        Nowe
                    </h5>
                    <div class="card-body">
                    <ul>
                        <?php for($i=0;$i<10;$i++): ?>
                            <li>
                                <a href="{{route('post')}}" class="card-link">Card link</a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                    <h5 class="card-title text-center card-header">
                        Losowe
                    </h5>
                    <div class="card-body">
                    <ul>
                        <?php for($i=0;$i<3;$i++): ?>
                            <li>
                                <a href="{{route('post')}}" class="card-link">Card link</a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
