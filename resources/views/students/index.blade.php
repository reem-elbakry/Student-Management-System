@extends('students.layout')

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
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td>
      <a type="submit" class="btn btn-success" href="{{route('students.show',$student)}}">Show</a>
      <a type="submit" class="btn btn-warning" href="{{route('students.edit',$student)}}">Edit</a>
      <form action="{{route('students.destroy',$student)}}" method="POST" style="display:inline-block">
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