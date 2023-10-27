@extends('layout/template')

@section('tittle',' Register Student | Foundation')

@section('content')

<main>
    <div class='container py-4'>
        <h2>Register Student</h2>

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error}} </li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ url('students') }}" method="post">

            @csrf

            <div class = 'mb-3 row'>
                <label for="name" class='col-sm-2 col-form-label'>Name:</label>
                <div class= 'col-sm-5'>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                </div>
            </div>

            <div class = 'mb-3 row'>
                <label for="birth_date" class='col-sm-2 col-form-label'>Birth Date:</label>
                <div class= 'col-sm-5'>
                    <input type="date" class="form-control" name="birth_date" id="birth_date" value="{{ old('birth_date') }}">
                </div>
            </div>

            <div class = 'mb-3 row'>
                <label for="course" class='col-sm-2 col-form-label'>Select Course:</label>
                <div class= 'col-sm-5'>
                   <select name="course" id="course" class='form-select' required>
                    <option value="">Select a Course</option>
                    @foreach($courses as $course)
                    <option value="{{$course->id }}">{{$course->name}}</option>
                    @endforeach
                   </select>
                </div>
            </div>

            <a href="{{url('students')}}" class = 'btn btn-secondary'>Back</a>
            <button type = "submit" class = "btn btn-success">Save</button>
        </form>
    </div>
    
</main>