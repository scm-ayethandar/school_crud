@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <form class="col-lg-8 mt-3 mx-auto" action="/update/{{ $student->id }}" method="POST">
        @method('PUT')
            @csrf
        <h2>Add Student</h2>
        <div class="mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" class="form-control" name="name" value="{{ $student->name }}">
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Student Age</label>
            <input type="text" class="form-control" name="age" value="{{ $student->age }}">
            @error('age')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Edit</button>
        </form>
    </div>
@endsection