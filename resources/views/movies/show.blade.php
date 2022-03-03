@extends('layouts.app')
@section('titile', 'Movie')
@section('content')
<h2>Movie:</h2>
    <h4>{{ $movie->title }} ({{ $movie->year_recorded }})</h4>
    <h4>{{ $movie->genre }}</h4>
    <h4>{{ $movie->director }}</h4>
    <h4>{{ $movie->storyline }}</h4>
    </div>
<h2>Comments:</h2>
@foreach ($comments as $comment)
<div class="border border-dark">
<p>{{ $comment->content }}</p>
<p>{{ $comment->created_at }}</p> <br>
</div> <br> <br>
@endforeach
<form method="POST" action="/comment/add">
    @csrf
    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
    <label for="content">Write a comment</label> <br>
    <textarea id="comment" name="content" cols="80" rows="5"></textarea>
    <br>
    @error('content')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    <button type="submit">Post!</button>
</form>
@endsection
