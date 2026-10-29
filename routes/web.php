<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services.index')->name('services.index');
Route::view('/contact', 'contact')->name('contact');

Route::prefix('services')->name('services.')->group(function () {
    Route::view('/contract-business', 'services.contract-business')->name('contract-business');
    Route::view('/ict-solutions', 'services.ict-solutions')->name('ict-solutions');
    Route::view('/product-manufacturing', 'services.product-manufacturing')->name('product-manufacturing');
    Route::view('/graphics-branding', 'services.graphics-branding')->name('graphics-branding');
    Route::view('/sound-audio', 'services.sound-audio')->name('sound-audio');
});

Route::redirect('/Index.php', '/');
Route::redirect('/About.php', '/about');
Route::redirect('/Services.php', '/services');
Route::redirect('/Contact.php', '/contact');
Route::redirect('/html/Index.php', '/');
Route::redirect('/html/About.php', '/about');
Route::redirect('/html/Services.php', '/services');
Route::redirect('/html/Contact.php', '/contact');
Route::redirect('/html/Services/contract-business.php', '/services/contract-business');
Route::redirect('/html/Services/ict-solutions.php', '/services/ict-solutions');
Route::redirect('/html/Services/product-manufacturing.php', '/services/product-manufacturing');
Route::redirect('/html/Services/graphics-branding.php', '/services/graphics-branding');
Route::redirect('/html/Services/sound-audio.php', '/services/sound-audio');
