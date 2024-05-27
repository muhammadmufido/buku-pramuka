<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PhotoController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [AppController::class, 'index']);

Route::get('/kategori', [AppController::class, 'kategori']);

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::get('/blog', [BlogController::class, 'index'])->name('blog')-> middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')-> middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')-> middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')-> middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')-> middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')-> middleware('auth');


Route::get('/photo', [photoController::class, 'index'])->name('photo')-> middleware('auth');
Route::post('/photo/store', [photoController::class, 'store'])->name('photo.store')-> middleware('auth');
Route::post('/photo/update/{id}', [photoController::class, 'update'])->name('photo.update')-> middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')-> middleware('auth');