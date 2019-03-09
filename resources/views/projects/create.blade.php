@extends('layout')

@section('title', 'create project')

@section('content')

    <h1>Create new project</h1>

    <form class="w-50" method="post" action="/projects" >
        @csrf

        <div class="form-row">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-row">
            <label for="description">description</label>
            <input class="form-control" type="text" name="description"/>
        </div>

        <div class="mt-3">
            <button class="btn btn-info form-" type="submit">Submit</button>
        </div>
    </form>
@endsection
