@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Home page</h1>
    <ul>
        @foreach ($videos as $video)
            <li>{{ $video->title }}</li>
        @endforeach
    </ul>
</main>

@endsection
