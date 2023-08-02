<?php

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
    $greet = 'Benvenuto';
    $name = 'Matteo';
    return view('home', compact('greet', 'name'));
})->name('home');

Route::get('/games', function () {
    $games = [
        ['title' => 'The Witcher', 'year' => 2015],
        ['title' => 'Elden Ring', 'year' => 2022],
        ['title' => 'Assassin\'s Creed Valhalla', 'year' => 2020],
        ['title' => 'Cyberpunk 2077', 'year' => 2020],
        ['title' => 'Red Dead Redemption 2', 'year' => 2018],
        ['title' => 'Horizon Zero Dawn', 'year' => 2017],
        ['title' => 'The Last of Us Part II', 'year' => 2020],
        ['title' => 'Death Stranding', 'year' => 2019],
        ['title' => 'God of War', 'year' => 2018],
    ];
    return view('games.index', compact('games'));
})->name('games');

Route::get('/books', function () {
    $books = [
        ['title' => '1984', 'year' => 1949],
        ['title' => 'To Kill a Mockingbird', 'year' => 1960],
        ['title' => 'The Great Gatsby', 'year' => 1925],
        ['title' => 'Pride and Prejudice', 'year' => 1813],
        ['title' => 'The Lord of the Rings', 'year' => 1954],
        ['title' => 'Brave New World', 'year' => 1932],
        ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'year' => 1997],
        ['title' => 'The Catcher in the Rye', 'year' => 1951],
        ['title' => 'The Hobbit', 'year' => 1937],
    ];
    return view('books.index', compact('books'));
})->name('books');

Route::get('/films', function () {
    $films = [
        ['title' => 'The Shawshank Redemption', 'year' => 1994],
        ['title' => 'The Godfather', 'year' => 1972],
        ['title' => 'The Dark Knight', 'year' => 2008],
        ['title' => 'Pulp Fiction', 'year' => 1994],
        ['title' => 'Forrest Gump', 'year' => 1994],
        ['title' => 'Inception', 'year' => 2010],
        ['title' => 'The Matrix', 'year' => 1999],
        ['title' => 'Gladiator', 'year' => 2000],
        ['title' => 'The Lord of the Rings: The Return of the King', 'year' => 2003],
    ];
    return view('films.index', compact('films'));
})->name('films');
