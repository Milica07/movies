<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('singleMovie');
Route::get('/create', [MovieController::class, 'create']);
Route::post('/create', [MovieController::class, 'store']);

Route::post('/comment/add', [CommentController::class, 'store']);
Route::get('/movies/genres/{genre}', [GenresController::class, 'show']);
