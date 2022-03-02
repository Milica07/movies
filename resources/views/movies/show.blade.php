@extends('layouts.app')
@section('titile', 'Movie')
@section('content')
<h2>Movie:</h2>
    <h4>{{ $movie->title }} ({{ $movie->year_recorded }})</h4>
    <h4>{{ $movie->genre }}</h4>
    <h4>{{ $movie->director }}</h4>
    <h4>{{ $movie->storyline }}</h4>
    </div>
@endsection
