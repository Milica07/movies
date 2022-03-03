@extends('layouts.app')
@section('titile', 'Movie')
@section('content')
<h2>Movie:</h2>
    <h4>{{ $movie->title }} ({{ $movie->year_recorded }})</h4>
    <a href="genres/{{ $movie->genre }}"><h4>{{ $movie->genre }}</h4></a>
    <h4>{{ $movie->director }}</h4>
    <h4>{{ $movie->storyline }}</h4>
    </div>
<div>
    <h4>Comments:</h4>
    @foreach ($comments as $comment)
    <div class="border border-dark">
        <p>{{ $comment->content }}</p>
        <p>{{ $comment->created_at }}</p>
    </div>
    <br>
    @endforeach
    <form method="POST" action="/comment/add">
    @csrf
    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
    <label for="content">Content of comment</label> <br>
    <textarea type="text" required cols="80" rows="5" id="content" name="content" placeholder="Write a comment" value="{{ old('comment') }}" class="@error('content') alert-danger @enderror"></textarea>
    @error('content')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <button type="submit">Post!</button>
</form>
</div>
<br>
@endsection
