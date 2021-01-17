@extends('posts.layout')
@section('content')
<form  action="{{route('posts.store')}}" method="POST" style="width: 50%; margin-left:20px; margin-top:50px; margin-bottom:149px">
@csrf
  <div class="form-group">
    <label for="formGroupExampleInput" class="lead">title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Enter post title">
    <label class="text-danger">{{$errors->first('title')}}</label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" class="lead">body</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="body" placeholder="Enter post body">
    <label class="text-danger">{{$errors->first('body')}}</label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" class="lead">Student ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="student_id" placeholder="Enter your speciality">
    <label class="text-danger">{{$errors->first('student_id')}}</label>
  </div>
  <button type="submit" class="btn btn-info" >Add Post</button>
</form>
@endsection