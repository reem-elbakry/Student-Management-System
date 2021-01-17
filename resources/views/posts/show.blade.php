@extends('posts.layout')

@section('content')
<!-- <div class="row justify-content-center"> -->
<div class="col-auto">
<table class="table table-responsive" style=" margin-bottom:350px ; margin-top:50px;">
  <thead>
    <tr class="text-light bg-info">
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Owner</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->student->name}}</td>
    </tr>
  </tbody>
</table>
</div>
</div>
@endsection