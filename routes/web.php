<?php

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
    return view('comics',["active" => "COMICS"]);
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];
    return view('comics.show',compact('comic'));
})->name('comics.show');

Route::get('/menu/{link}', function ($link) {
    return view('comics',["active" => $link]);
})->name('menu');


