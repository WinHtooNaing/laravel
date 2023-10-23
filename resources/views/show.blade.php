@extends('layout')

@section('content')

<div class="container" style="margin-top:50px">
<div class="card">
  <div class="card-header" style="text-align: center;">
    Contents
  </div>


  <div class="card-body">
    <h5 class="card-title">{{$data->name}}</h5>
    <p class="card-text">{{$data->description}}</p>
    <a href="/posts" class="btn btn-success">Back</a>
  </div><hr>
 

</div>
</div>
@endsection