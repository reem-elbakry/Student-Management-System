@extends('students.layout')

@section('content')
<!-- <div class="row justify-content-center"> -->
<div class="col-auto">
<table class="table table-responsive" style=" margin-bottom:350px ; margin-top:50px;">
  <thead>
    <tr class="text-light bg-info">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
    </tr>
  </tbody>
</table>
</div>
</div>
@endsection