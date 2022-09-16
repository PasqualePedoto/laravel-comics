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
    return view('home');
});

Route::get('/catwoman', function () {
    return view('pages.catwoman');
})->name('catwoman');

Route::get('/actioncomics', function () {
    return view('pages.actioncomics');
})->name('actioncomics');

Route::get('/americanvampire', function () {
    return view('pages.americanvampire');
})->name('americanvampire');

Route::get('/aquaman', function () {
    return view('pages.aquaman');
})->name('aquaman');

Route::get('/batgirl', function () {
    return view('pages.batgirl');
})->name('batgirl');

Route::get('/batman', function () {
    return view('pages.batman');
})->name('batman');

Route::get('/batmanbeyond', function () {
    return view('pages.batmanbeyond');
})->name('batmanbeyond');

Route::get('/butmansuperman', function () {
    return view('pages.butmansuperman');
})->name('butmansuperman');

Route::get('/batmansupermanannual', function () {
    return view('pages.batmansupermanannual');
})->name('batmansupermanannual');

Route::get('/batmanjoker', function () {
    return view('pages.batmanjoker');
})->name('batmanjoker');

Route::get('/harleyquinn', function () {
    return view('pages.harleyquinn');
})->name('harleyquinn');

Route::get('/batmanthreejoker', function () {
    return view('pages.batmanthreejoker');
})->name('batmanthreejoker');

