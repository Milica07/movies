@extends('layouts.app')
@section('titile', 'Movies')
@section('content')
<h2>Movies:</h2>
@foreach ($movies as $movie)
    <div>
    <a href="movies/{{ $movie->id }}"><h4>{{ $movie->title }} ({{ $movie->year_recorded }})</h4></a>
    <h4>{{ $movie->genre }}</h4>
    <h4>{{ $movie->director }}</h4>
    <h4>{{ $movie->storyline }}</h4>
    </div>
@endforeach
@endsection
