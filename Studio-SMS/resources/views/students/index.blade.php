@extends('templates.app')

@section('title', 'Students')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Students</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Name</td>
          <td>StudentID</td>
          <td colspan = 4>Github</td>
        </tr>
    </thead>
    <div>
    <a style="margin: 19px;" href="{{ route('students.create')}}" class="btn btn-primary">New student</a>
    </div>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->first_name}} {{$student->last_name}}</td>
            <td>{{$student->student_id}}</td>
            <td>{{$student->github}}</td>

            <td>
                <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit Student</a>
            </td>
            <td>
                <form action="{{ route('students.destroy', $student->id)}}" method="post">
                <a href="{{ route('evidence.show',$student->id)}}" class="btn btn-primary">View Submissions</a>
            </td>
            <td>
                <form action="{{ route('students.destroy',$student->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete Student</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection