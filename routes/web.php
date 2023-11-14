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
    return view('index');
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('array', function () {
    //infinite loop
    $nilai_awal = 1;
    while ($nilai_awal <= 100) {
        echo'Hello Laravel' . $nilai_awal . 'x<br>';
        $nilai_awal++;  
    }
});
