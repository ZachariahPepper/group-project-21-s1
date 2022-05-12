
<!-- Takes the html from the app.blade.php file and loads it up on the welcome page -->
@extends('pre-login-template.app2')
    
<!-- Changes the title to Student Management System -->
@section('title', 'Student Management System')
    
<!-- Add content to the page -->
@section('content')
<div class="jumbotron-fluid">
  <div class="container justify-content-center">
    <h1 class="display-3">Studio-SMS</h1>
    <p class="lead">Welcome to the Studio Student Management System.<br></p>
    <p class="lead">Here you can view, create, and edit all students within the studio courses.</p>
  </div>
</div>
@endsection
    

