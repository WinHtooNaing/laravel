@extends('layout')

@section('content')

<div class="container" style="margin-top:50px">
<div class="card">
  <div class="card-header" style="text-align: center;">
    Contents
  </div>
  @foreach($data as $post)
  <div class="card-body">
    <h5 class="card-title">{{$post->name}}</h5>
    <p class="card-text">{{$post->description}}</p>
    <a href="#" class="btn btn-primary">view</a>
  </div><hr>
  @endforeach
</div>
</div>
@endsection