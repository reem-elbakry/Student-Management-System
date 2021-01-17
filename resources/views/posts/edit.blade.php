@extends('posts.layout')
@section('content')
<form  action="{{route('posts.update',$post)}}" method="POST" style="width: 50%; margin-left:20px; margin-top:50px; margin-bottom:149px">
@csrf @method('PUT')
  <div class="form-group">
    <label for="formGroupExampleInput" class="lead">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="title" value="{{$post->title}}" >
    <label class="text-danger">{{$errors->first('title')}}</label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" class="lead">Body</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="body" value="{{$post->body}}" >
    <label class="text-danger">{{$errors->first('body')}}</label>
  </div>
  <button type="submit" class="btn btn-info" >Update Post</button>
</form>
@endsection