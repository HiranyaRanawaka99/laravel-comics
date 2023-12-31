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

    $header_links = config('comics_db.header_links');

    $comics_list = config('comics_db.comics_list');

    $footer_links = config('comics_db.footer_links');

    $products = config('comics_db.products');


    return view('homepage', compact('header_links','comics_list', 'footer_links', 'products'));
})->name('home');

