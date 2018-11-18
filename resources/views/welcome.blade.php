@extends('layout')

@section('title')

@section('content')
    <h1>My First Website!</h1>
    <h2>Parameter passed: {{ $foo }}</h2>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection
