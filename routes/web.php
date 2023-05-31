<?php

// use App\Http\Controllers\HelloController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->middleware(['auth', 'verified']);

// Auth
// Route::get('login', [AuthController::class, 'login']);
// Route::post('login', [AuthController::class, 'authenticate']);
// Route::get('logout', [AuthController::class, 'logout']);
// Route::get('register', [AuthController::class, 'register_form'])->name('register');
// Route::post('register', [AuthController::class, 'register']);

// Content
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/trash', [PostController::class, 'trash']);
Route::get('posts/{slug}', [PostController::class, 'show']);
Route::post('posts', [PostController::class, 'store']);
Route::get('posts/{slug}/edit', [PostController::class, 'edit']);
Route::patch('posts/{slug}', [PostController::class, 'update']);
Route::delete('posts/{slug}', [PostController::class, 'destroy']);
