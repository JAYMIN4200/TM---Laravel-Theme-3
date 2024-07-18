<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});


Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/datatable', function () {
    return view('datatable');
})->name('datatable');

Route::get('/usertable', function () {
    return view('usertable');
})->name('usertable');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

