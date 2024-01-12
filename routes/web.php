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
    $comics = config('db.comics');
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    $listIcons = config('db.listIcons');
    return view('home', compact('comics', 'navItems', 'footerNavItems','socialIcons', 'listIcons'));
})->name('home');

Route::get('/character', function () { 
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('character', compact('navItems', 'footerNavItems','socialIcons'));
})->name('character');

Route::get('/comics', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('comics', compact('navItems', 'footerNavItems','socialIcons'));
})->name('comics');

Route::get('/movies', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('movies' ,compact('navItems', 'footerNavItems','socialIcons'));
})->name('movies');

Route::get('/tv', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('tv', compact('navItems', 'footerNavItems','socialIcons'));
})->name('tv');

Route::get('/games', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('games', compact('navItems', 'footerNavItems','socialIcons'));
})->name('games');

Route::get('/collectibles', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('collectibles', compact('navItems', 'footerNavItems','socialIcons'));
})->name('collectibles');

Route::get('/videos', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('videos', compact('navItems', 'footerNavItems','socialIcons'));
})->name('videos');

Route::get('/fans', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('fans', compact('navItems', 'footerNavItems','socialIcons'));
})->name('fans');

Route::get('/news', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('news', compact('navItems', 'footerNavItems','socialIcons'));
})->name('news');

Route::get('/shop', function () {
    $navItems = config('db.navItems');
    $footerNavItems = config('db.footerNavItems');
    $socialIcons = config('db.socialIcons');
    return view('shop', compact('navItems', 'footerNavItems','socialIcons'));
})->name('shop');




