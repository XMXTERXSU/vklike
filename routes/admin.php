<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Comment\CommentController;

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

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::redirect('/', 'posts')->name('admin');

    Route::resource('posts', AdminController::class, ['as' => 'admin']);
    Route::post('like', [AdminController::class, 'like']);
});


