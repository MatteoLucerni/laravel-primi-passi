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
});

Route::get('/list', function () {
    return view('games.index');
});
