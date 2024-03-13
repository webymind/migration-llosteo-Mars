<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Define routes for each language and page combination
Route::get('/service/{lang?}', function ($lang = 'en') {
    App::setLocale($lang);
    return view('user.service1');
});

Route::get('/about/{lang?}', function ($lang = 'en') {
    App::setLocale($lang);
    return view('user.about');
});

Route::get('/contact/{lang?}', function ($lang = 'en') {
    App::setLocale($lang);
    return view('user.contact');
});

Route::get('/help/{lang?}', function ($lang = 'en') {
    App::setLocale($lang);
    return view('user.help');
});

Route::get('/termconditions/{lang?}', function ($lang = 'en') {
    App::setLocale($lang);
    return view('user.termconditions');
});

Route::get('/privacypolicy/{lang?}', function ($lang = 'en') {
    App::setLocale($lang);
    return view('user.termconditions');
});

// Define a generic route for the homepage
Route::get('/{lang?}', function ($lang = null) {
    if ($lang) {
        App::setLocale($lang);
    } else {
        App::setLocale('en'); // Default to English if no language is provided
    }
    return view('user.home');
});
