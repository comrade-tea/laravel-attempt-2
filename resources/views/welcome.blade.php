@extends('layout')

@section('title', 'welcome')

@section('content')
    <h1>welcome</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection
