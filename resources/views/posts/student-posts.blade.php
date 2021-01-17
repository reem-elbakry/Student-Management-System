@extends('posts.layout')
@section('content')

<!-- <div class="row justify-content-center"> -->
<div class="col-auto">
<table class="table table-responsive" style=" margin-bottom:350px ; margin-top:50px;">
@foreach($posts as $post)
  <thead>
    <tr class="text-light bg-info">
      <th scope="col">Title</th>
      <th scope="col">Body</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>
@endsection