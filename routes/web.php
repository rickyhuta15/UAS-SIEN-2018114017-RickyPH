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
    return view('welcome');
});

Route::get('/Data_Mahasiswa', function () {
    return view('Data_Mahasiswa');
});

Route::get('/Pemrograman', function () {
    return view('Pemrograman');
});

Route::get('/RPL', function () {
    return view('RPL');
});

Route::get('/ERP', function () {
    return view('ERP');
});

Route::get('/Integrasi_SI', function () {
    return view('Integrasi_SI');
});

Route::get('/Android', function () {
    return view('Android');
});

Route::get('/Home', function () {
    return view('Home');
});