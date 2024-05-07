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
    $icons = config("links.social_icons");
    //dd($banner_images);
    //dd($comics);
    $data = [
        "comics" => $comics,
        "banner_links" => $banner_links,
        "footer_links" => $footer_links,
        "icons" => $icons
    ];

    return view('homepage', $data);
})->name("homepage");

Route::get('/movies', function () {
    $comics = config("comics");
    $banner_links = config("links.banner_links");
    $footer_links = config("links.footer_links");
    $icons = config("links.social_icons");
    //dd($banner_images);
    //dd($comics);
    $data = [
        "comics" => $comics,
        "banner_links" => $banner_links,
        "footer_links" => $footer_links,
        "icons" => $icons
    ];
    return view('movies', $data);
})->name("movies");

Route::get('/tv', function () {
    $comics = config("comics");
    $banner_links = config("links.banner_links");
    $footer_links = config("links.footer_links");
    $icons = config("links.social_icons");
    //dd($banner_images);
    //dd($comics);
    $data = [
        "comics" => $comics,
        "banner_links" => $banner_links,
        "footer_links" => $footer_links,
        "icons" => $icons
    ];
    return view('tv', $data);
})->name("tv");

Route::get('/comic_books', function () {
    $comics = config("comics");
    $banner_links = config("links.banner_links");
    $footer_links = config("links.footer_links");
    $icons = config("links.social_icons");

    $comicsCollection = collect($comics);

    $comic_books = $comicsCollection->filter(fn ($product) => $product['type'] === 'comic book');

    $data = [
        "comics" => $comics,
        "banner_links" => $banner_links,
        "footer_links" => $footer_links,
        "icons" => $icons,
        "comic_books" => $comic_books
    ];
    return view('comic_books', $data);
})->name("comic_books");
