<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'director',
        'year_recorded',
        'storyline',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
