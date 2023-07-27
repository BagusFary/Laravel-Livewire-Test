<?php

use App\Http\Controllers\PostController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', [PostController::class, 'index']);
Route::get('/topics-detail', [PostController::class, 'topicsDetail']);

Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::get('/posts',[PostController::class, 'indexPost']);
    Route::get('/post/show/{id}', [PostController::class, 'show']);
    Route::get('/post/edit/{id}', [PostController::class, 'edit']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
