@extends('layout')

@section('content')

<h2 style="margin-top: 50px;text-align:center;margin-bottom:30px;">Users Detail</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection