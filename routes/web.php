<?php

use App\Http\Controllers\Admin\LightsaberController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/lightsabers', [PageController::class, 'sabers'])->name('lightsabers');
Route::get('/lightsabers/{lightsaber}', [PageController::class, 'saber'])->name('lightsaber');


Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::resource('/admin/lightsabers', LightsaberController::class);

Route::resource('/admin/posts', PostController::class);
