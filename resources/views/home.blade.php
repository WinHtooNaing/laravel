@extends('layout')

@section('content')

<div class="container" style="margin-top:50px">
<div class="card">
  <div class="card-header" style="text-align: center;">
    Contents
  </div>
  <div style="margin-left: 5%;">
  <br>
    <a href="posts/create" class="btn btn-success">New Post</a>
    <br>
  </div>
  @foreach($data as $post)
  <div class="card-body">
    <h5 class="card-title">{{$post->name}}</h5>
    <p class="card-text">{{$post->description}}</p>
    <a href="/posts/{{$post->id}}" class="btn btn-primary">view</a>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">edit</a>
    <form action="/posts/{{$post->id}}" method="post">
      @csrf
      @method("DELETE")
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>

  </div><hr>
  @endforeach
</div>
</div>
@endsection