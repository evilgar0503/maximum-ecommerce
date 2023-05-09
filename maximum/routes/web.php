<?php

use App\Http\Controllers\AvisosController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\NoticiaController;
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

Route::controller(RedirectionController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/contacto', 'contact')->name('contacto');
    Route::get('/products', 'shop')->name('shop');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/blog/create', 'blogCreate')->name('blog.create');
    });
});

Route::get('/blog', [NoticiaController::class, 'index'])->name('blog');

Route::post('/noticia/create', [NoticiaController::class, 'create'])->name('noticia.create');
Route::get('/noticia/edit/{id}', [NoticiaController::class, 'edit'])->name('noticia.edit');
Route::post('/notice/edit', [NoticiaController::class, 'update'])->name('noticia.update');
Route::post('/noticia', [ComentarioController::class, 'store'])->name('comentario.create');

Route::get('/noticia/{id}', [NoticiaController::class, 'show'])->name('noticia.show');


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
