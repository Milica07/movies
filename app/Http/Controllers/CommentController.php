<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        $data = $request->validated();
        $movie_id = $request->get('movie_id');
        $movie = Movie::findOrFail($movie_id);
        $movie->comments()->create($data);
        return back();
    }
}
