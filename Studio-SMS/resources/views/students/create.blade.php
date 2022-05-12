@extends('templates.app')

@section('title', 'Students')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a student</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="student_id">StudentID:</label>
              <input type="text" class="form-control" name="student_id"/>
          </div>
          <div class="form-group">
              <label for="github">Github:</label>
              <input type="text" class="form-control" name="github"/>
          </div>                     
          <button type="submit" class="btn btn-primary">Add Student</button>
      </form>
  </div>
</div>
</div>
@endsection