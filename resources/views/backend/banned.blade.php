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
    @foreach($banned as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td><img src="..\user.png" class="rounded-circle mr-1" alt="" width="32" height="32">{{$user->name}}</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td><a href="" class="btn btn-secondary">Unban</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection

