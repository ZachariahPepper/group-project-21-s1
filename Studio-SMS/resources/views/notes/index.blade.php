@extends('templates.app')

@section('title', 'Notes')

@section('content')

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Notes</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Note</td>
          <td>StudentID</td>
        </tr>
    </thead>
    <tbody>
        @foreach($notes as $notes)
        <tr>
          <td>{{$notes->documentation}}</td>
          <td>{{$notes->student_id}}</td>
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