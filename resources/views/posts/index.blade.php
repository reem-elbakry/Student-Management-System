@extends('posts.layout')

@section('content') 
<div class="container-fluid ">
<div class="row justify-content-center">
<div class="col-auto">
<img class="bg-light"src="">
</div>
</div>
<div class="row justify-content-center">
<div class="col-auto">
<table class="table table-responsive bg-light" style=" margin-bottom:350px ; margin-top:80px;">
  <thead>
    <tr class="text-light bg-info">
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Owner</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td><a href="{{route('stdposts.show',$post->student)}}">{{$post->student->name}}</a></td>
      <td>
      <a type="submit" class="btn btn-success" href="{{route('posts.show',$post)}}">Show</a>
      <a type="submit" class="btn btn-warning" href="{{route('posts.edit',$post)}}">Edit</a>
      <form action="{{route('posts.destroy',$post)}}" method="POST" style="display:inline-block">
      @csrf @method('delete')
      <button type="submit" class="btn btn-danger text-light">Delete</button>
      </form>
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection