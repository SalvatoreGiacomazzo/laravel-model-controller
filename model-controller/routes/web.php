<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.page');
})->name('page');


Route::get('/', [HomepageController::class, "index"]);


Route::get('/movies', [MovieController::class, "index"]);

Route::get('/movies', function () {
    return view('pages.movies');
})->name('movies');
