@extends('layouts.app')
@section('title', 'Genres')
@section('content')
@foreach ($movies as $movie) <br>
<h4 style="color:red">{{ $movie->title }}</h4>
<h4>{{ $movie->genre }}</h4>
<h4>{{ $movie->director }}</h4>
<h4>{{ $movie->storyline }}</h4>
@endforeach
@endsection
