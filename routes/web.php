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

    $comics_list = config('comics_db.comics_list');

    $footer_links = config('comics_db.footer_links');


    return view('homepage', compact('comics_list', 'footer_links'));
})->name('home');

