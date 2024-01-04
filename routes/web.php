<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
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
    return view('index', [
        'title' => 'Home'
    ]);
});

Route::get('/categories', [CategoriesController::class, 'categories']);

Route::get('/categories/{category:slug}', [CategoriesController::class, 'category']);

Route::get('/books', [BookController::class, 'books']);

Route::get('/books/{book:slug}', [BookController::class, 'bookId']);

Route::get('/about', function() {
    return view('about', [
        'title' => 'About'
    ]);
});
