<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ShortController;

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

Route::get('/',[VideoController::class, 'index'])->name('home');

Route::get('/videos/{id}', [VideoController::class, 'show'])->name('videos.show');

Route::get('/search', [VideoController::class, 'search'])->name('videos.search');

Route::get('/short', [ShortController::class, 'index'])->name('shorts.index');
