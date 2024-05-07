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

    $comics = config("comics");
    $banner_links = config("links.banner_links");
    $footer_links = config("links.footer_links");
    //dd($banner_images);
    //dd($comics);
    $data = [
        "comics" => $comics,
        "banner_links" => $banner_links,
        "footer_links" => $footer_links
    ];

    return view('homepage', $data);
})->name("homepage");

Route::get('/movies', function () {

    return view('movies');
})->name("movies");

Route::get('/tv', function () {

    return view('tv');
})->name("tv");
