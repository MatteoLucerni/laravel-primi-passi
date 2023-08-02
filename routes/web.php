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
    $games = [
        ['title' => 'The Witcher', 'year' => 2015],
        ['title' => 'Elden Ring', 'year' => 2022],
    ];
    return view('home', compact('greet', 'name', 'games'));
});

Route::get('/list', function () {
    return view('games.index');
});
