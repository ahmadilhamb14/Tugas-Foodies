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
    return view('index');
});

Route::get('/contents/{judul}.php', function($judul){

    return view('content', [
        'post' => file_get_contents(__DIR__ . "/../resources/contents/{$judul}.php")
    ]);
});

