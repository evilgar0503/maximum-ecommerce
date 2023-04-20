<?php

use App\Http\Controllers\AvisosController;
use App\Http\Controllers\RedirectionController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
})->name('home');

Route::get('/contacto', function () {
    return view('contact');
})->name('contacto');

Route::controller(RedirectionController::class)->group(function () {
    Route::get('/blog', 'blog')->name('blog');
    Route::middleware('auth', 'admin')->group(function () {
        Route::get('/blog/create', 'blogCreate')->name('blog.create');
    });
});

Route::post('/formulario', [AvisosController::class, 'store'])->name('avisos.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
