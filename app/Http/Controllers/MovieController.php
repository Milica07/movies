<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $comments = $movie->comments;
        return view('movies.show', compact('movie', 'comments'));
    }

    public function create()
    {
        return view('movies.create-movie');
    }

    public function store(MovieRequest $request)
    {
        $data = $request->validated();

        $movie = Movie::create($data);

        return redirect("/movies/$movie->id");
    }
}
