<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home');
});

Route::get('/user', function () {
    return Inertia::render('User');
});
Route::get('/login', function() {
    return Inertia::render('Auth/Login');
});


Route::middleware('auth')->group(function () {
    Route::post('/post', [PostController::class, 'store'])->name('posts.store');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });

require __DIR__.'/auth.php';
