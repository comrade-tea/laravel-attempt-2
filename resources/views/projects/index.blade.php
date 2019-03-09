@extends('layout')

@section('title', 'all projects')

@section('content')

    <h1>All projects babe</h1>

    <ul>
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                    <h3>
                        {{ $project->title }}
                    </h3>
                    <div>
                        {{ $project->description }}
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
