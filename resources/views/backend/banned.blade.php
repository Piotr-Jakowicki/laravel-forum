@extends('layouts.backend')

@section('content')
<div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
  <h3>Banned users</h3>
</div> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Ban date</th>
      <th scope="col">Reason</th>
      <th scope="col">Unban</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i=0;$i<20;$i++): ?>
      <tr>
        <th scope="row">1</th>
        <td><img src="..\user.png" class="rounded-circle mr-1" alt="" width="32" height="32">Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td><button>Unban</button></td>
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
@endsection

