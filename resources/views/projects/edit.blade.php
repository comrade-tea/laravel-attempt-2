@extends('layout')

@section('title', 'create project')

@section('content')

    <h1>Edit project</h1>
{{--    {{$project->title}}--}}

    <form class="w-50" method="post" action="/projects/{{$project->id}}" >
        @csrf
        @method('patch')

        <div class="form-row">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value={{$project->title}}>
        </div>
        <div class="form-row">
            <label for="description">description</label>
            <input class="form-control" type="text" name="description" value={{$project->description}}/>
        </div>

        <div class="mt-3">
            <button class="btn btn-info" type="submit">Submit</button>
        </div>
    </form>

    <form action="/projects/{{$project->id}}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Delete project</button>
    </form>
@endsection
