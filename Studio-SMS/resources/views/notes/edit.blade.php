@extends('templates.app')

@section('title', 'Students')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a note</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('notes.update', $notes->id)}}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="student_id">Student ID</label>
                <input type="text" class="form-control" name="student_id" value={{ $notes->student_id }} />
            </div>

            <div class="form-group">
                <label for="documentation">Notes:</label>
                <input type="text" class="form-control" name="documentation" value={{ $notes->documentation }} />
            </div>
                <button type="submit" class="btn btn-primary">Edit Note</button>
        </form>
    </div>
</div>
@endsection