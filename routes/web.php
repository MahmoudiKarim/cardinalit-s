<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlleur;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/oneToOne', [controlleur::class, 'oneToOne'])->name('oneToOne');

Route::get('/ManyToMany', [controlleur::class, 'ManyToMany'])->name('ManyToMany');

Route::get('/OneToMany', [controlleur::class, 'OneToMany'])->name('OneToMany');

Route::get('/test1', function () {
    return view('page1');
});
Route::get('/test2', function () {
    return view('page2');
});


Route::get('/test3', function () {
    return view('page3');
});





