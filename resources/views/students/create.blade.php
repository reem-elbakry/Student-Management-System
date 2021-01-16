@extends('students.layout')
@section('content')
<form  action="{{route('students.store')}}" method="POST" style="width: 50%; margin-left:20px; margin-top:50px; margin-bottom:149px">
@csrf
  <div class="form-group">
    <label for="formGroupExampleInput" class="lead">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter your name">
    <label class="text-danger">{{$errors->first('name')}}</label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" class="lead">Age</label>
    <input type="number" class="form-control" id="formGroupExampleInput2" name="age" placeholder="Enter your age">
    <label class="text-danger">{{$errors->first('age')}}</label>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" class="lead">Speciality</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="speciality" placeholder="Enter your speciality">
    <label class="text-danger">{{$errors->first('speciality')}}</label>
  </div>
  <button type="submit" class="btn btn-info" >Add Student</button>
</form>
@endsection