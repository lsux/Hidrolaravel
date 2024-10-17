<?php

use App\Http\Controllers\AcueductosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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

// route::redirect('/', 'posts');

route::resource('posts', PostController::class);

// route::middleware('guest')->group(function(){

    route::get('/', function () {
        $acueductos = null;
        return view('index', compact('acueductos'));
    })->name('home');

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
    route::post('/register', [AuthController::class, 'register']);

    route::view('/login', 'auth.login')->name('login');
    route::post('/login', [AuthController::class, 'login']);

    route::get('/acueductos', [AcueductosController::class, 'index'])->name('index_acueducto');
    route::view('/crear_acueductos', 'acueductos.crearAcueductos')->name('crear_acueductos');
    route::post('/acueductos', [AcueductosController::class, 'store'])->name('store_acueducto');
    route::delete('/acueductos/{acueducto}', [AcueductosController::class, 'destroy'])->name('destroy_acueducto');
    route::get('/acueductos/{acueducto}/edit', [AcueductosController::class, 'edit'])->name('edit_acueducto');
    route::put('/acueductos/{acueducto}', [AcueductosController::class, 'update'])->name('update_acueducto');

    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// });

