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
        ['title' => 'Assassin\'s Creed Valhalla', 'year' => 2020],
        ['title' => 'Cyberpunk 2077', 'year' => 2020],
        ['title' => 'Red Dead Redemption 2', 'year' => 2018],
        ['title' => 'Horizon Zero Dawn', 'year' => 2017],
        ['title' => 'The Last of Us Part II', 'year' => 2020],
        ['title' => 'Death Stranding', 'year' => 2019],
        ['title' => 'God of War', 'year' => 2018],
    ];
    return view('home', compact('greet', 'name', 'games'));
});

Route::get('/list', function () {
    return view('games.index');
});
