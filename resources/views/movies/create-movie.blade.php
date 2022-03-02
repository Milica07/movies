@extends('layouts.app')
@section('title', 'Add movie')

@section('content')
<h3>Add movie</h3>
<form action="/create" method="post">
@csrf
<label for="title">Title</label>
<input type="text" required id="title" name="title" placeholder="Movie title" value="{{ old('title') }}" class="@error('title') alert-danger @enderror" /><br />
@error('title')
<div class="alert alert-danger">
    {{$message}}
</div>
@enderror
<label for="genre">Genre</label>
<input type="text" required id="genre" name="genre" placeholder="Movie genre" value="{{ old('genre') }}" class="@error('genre') alert-danger @enderror" /><br />
@error('genre')
<div class="alert alert-danger">
    {{$message}}
</div>
@enderror
<label for="director">Director</label>
<input type="text" id="director" name="director" placeholder="Movie director" value="{{ old('director') }}" class="@error('director') alert-danger @enderror" /><br />
@error('director')
<div class="alert alert-danger">
    {{$message}}
</div>
@enderror
<label for="year_recorded">Recorded</label>
<input name="year_recorded" type="number" min="1900" max="{{now()->year}}" placeholder="Release year" value="{{ old('release_year') }}" class="@error('release_year') alert-danger @enderror" /><br />
    @error('year_recorded')
    <div class="alert alert-danger">
        {{$message}}
    </div>
@enderror
<label for="storyline">Storyline</label>
<input type="text" id="storyline" name="storyline" placeholder="Movie storyline" class="@error('storyline') alert-danger @enderror">{{ old('storyline') }}</textarea><br />
@error('storyline')
<div class="alert alert-danger">
    {{$message}}
</div>
@enderror
<button type="submit">Submit</button>
</form>
@endsection
