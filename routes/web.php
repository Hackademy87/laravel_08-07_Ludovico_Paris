<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;

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
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/film/create', [FilmController::class, 'create'])->name('film.create');
Route::post('/film/store', [FilmController::class, 'store'])->name('film.store');
Route::get('/film/index', [FilmController::class, 'index'])->name('film.index');
Route::get('/film/show/{film}', [FilmController::class, 'show'])->name('film.show');
Route::get('/film/edit/{film}', [FilmController::class, 'edit'])->name('film.edit');
Route::put('/film/update/{film}', [FilmController::class, 'update'])->name('film.update');
Route::delete('/film/delete/{film}', [FilmController::class, 'delete'])->name('film.delete');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/userrole/{user}', [AdminController::class, 'chageUserRole'])->name('admin.changeUserRole');