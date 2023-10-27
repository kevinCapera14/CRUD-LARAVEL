@extends('layout/template')

@section('tittle',' Register Student | Foundation')

@section('content')

<main>
    <div class='container py-4'>
        <h2>{{$msg}}</h2>

        <a href="{{url('students')}}" class="btn btn-secondary">Back</a>