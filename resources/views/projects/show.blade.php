@extends('layout')

@section('title', 'show project')

@section('content')

    <h1>{{$project->title}}; id: {{$project->id}}</h1>

    <p class="">{{$project->description}}</p>

    <a class="btn btn-info" href="/projects/{{$project->id}}/edit">Edit project</a>

@endsection
