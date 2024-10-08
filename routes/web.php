<?php

use App\Http\Controllers\AuthController;
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
    return view('index');
})->name('index');

route::get('/acueductos', function () {
    return view('acueductos');
})->name('acueductos');

route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');

route::view('/register', 'auth.register')->name('register');

Route::post('/register', [AuthController::class, 'register']);
