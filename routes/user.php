<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\User\UserPostController;

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

Route::prefix('user')->middleware(['active'])->group(function () {
    Route::redirect('/', '/user/posts')->name('user');
    Route::resource('posts', UserPostController::class, ['as' => 'user']);
    Route::post('like', [UserPostController::class, 'like'])->name('user.like');
});

