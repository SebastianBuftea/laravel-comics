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
    $links = config('db.links');
    return view('home', compact('links'));
})->name('/');


Route::get('/comics', function () {
    $comics = config('db.comics');
    $links = config('db.links');
    return view('comics', compact('comics', 'links'));
})->name('comics');

Route::get('/comics/{param}', function ($id) {
    $comics = config('db.comics');
    $links = config('db.links');
    foreach ($comics as $comic) {
        if ($comic['id'] == $id) {
            $item = $comic;
        }
    }
    return view('detail_comic', compact('comics', 'item', 'links'));
})->name('detail-comic');
