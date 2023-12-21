<?php

use App\Http\Controllers\mahasiswaController;
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
/*
Route::get('/', function () {
    return view('index');
});
Route::get('/mahasiswa', function () {
    $npm = [123,124,125,126];
    $nama = ['Jono','Joni','Juna','Jena'];
    $jumlah = count($npm);
    return view('mahasiswa',compact('npm','jumlah','nama'));
});
Route::get('/profile', function () {
    $nama = 'Fulan';
    return view('profile')->with('nama', $nama);
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/table', function () {
    return view('table');
});*/

Route::resource('mahasiswa',mahasiswaController::class);


