<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\Group\GroupController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\UserPostController;
use App\Http\Controllers\User\UserGroupController;


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

Route::view('/', 'home.index')->name('home');

Route::resource('/posts', PostController::class)->only(['index', 'show']);

Route::resource('/groups', GroupController::class)->only(['index', 'show']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'store'])->middleware('guest')->name('login.store');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::post('/logout', LogoutController::class)->name('logout');

Route::prefix('user')->middleware(['auth:sanctum'])->group(function () {
    Route::redirect('/', '/user/posts')->name('user');

    Route::resource('posts', UserPostController::class, ['as' => 'user']);
    // Route::get();

    Route::resource('groups', UserGroupController::class, ['as' => 'user']);
});

