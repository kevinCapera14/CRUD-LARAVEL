@extends('layout/template')

@section('tittle','Students | Foundation')

@section('content')

<main>
    <div class='container py-4'>

        <h2>List of the Students</h2>
        <br>
        <a href="{{ url('students/create')}}" class='btn btn-primary btn-sm'>Add</a>

        <table class="table table-hover" >
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Birt Date</th>
                <th>Course</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student ->id}}</td>
                <td>{{$student ->name}}</td>
                <td>{{$student ->birth_date}}</td>
                <td>{{$student ->course->name}}</td>
                <td><a href="{{ url( 'students/'.$student->id.'/edit')}}" class= "btn btn-warning btn-sm">Update</a></td>
                <td>
                    <form action="{{url('students/' .$student->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type= "submit" class="btn btn-danger btn-sm">Delete</button>
                        
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</main>