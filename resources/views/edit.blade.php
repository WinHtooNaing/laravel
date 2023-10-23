@extends('layout')

@section('content')

<div class="container" style="margin-top:50px">

 

<div class="card">
<div class="card-header" style="text-align: center;">
    New Post
  </div>
<div class="card-body">
<form action="/posts/{{$data->id}}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input value="{{$data->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea  class="form-control" id="exampleInputPassword1" name="description" required>{{$data->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/posts" class="btn btn-success">back</a>
</form>
</div>
  
  
</div>
</div>
@endsection