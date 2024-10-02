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

route::get('/', function () {
    return view('welcome');
});

route::get('/index', function () {
    return view('index');
});

route::get('/acueductos', function () {
    return view('acueductos');
});

route::get('/conocenos', function () {
    return view('conocenos');
});

route::get('/contacto', function () {
    return view('contacto');
});

route::get('/nosotros', function () {
    return view('nosotros');
});

route::get('/noticias', function () {
    return view('noticias');
});

