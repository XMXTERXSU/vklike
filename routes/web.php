<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/profile/{user_id}', ProfileController::class)->middleware('')->name('user.profile');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'store'])->middleware('guest')->name('login.store');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});


Route::prefix('user')->middleware(['auth:sanctum'])->group(function () {
    Route::redirect('/', '/user/posts')->name('user');

    // Route::resource('posts', UserPostController::class, ['as' => 'user']);


    Route::get('/profile', [UserPostController::class, 'index'])->name('user.profile');
    Route::get('/posts/create', [UserPostController::class, 'create'])->name('user.posts.create');
    Route::post('/posts', [UserPostController::class, 'store'])->name('user.posts.store');
    Route::get('/posts/{post}', [UserPostController::class, 'show'])->name('user.posts.show');
    Route::get('/posts/{post}/edit', [UserPostController::class, 'edit'])->name('user.posts.edit');
    Route::put('/posts/{post}', [UserPostController::class, 'update'])->name('user.posts.update');
    Route::delete('/posts/{post}', [UserPostController::class, 'destroy'])->name('user.posts.destroy');

    Route::resource('groups', UserGroupController::class, ['as' => 'user']);

    Route::post('/logout', LogoutController::class)->name('logout');
});
