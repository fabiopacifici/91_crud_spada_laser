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
/*
Route::get('/lightsabers', [LightsaberController::class, 'index']);
Route::get('/lightsabers/create', [LightsaberController::class, 'create']);
Route::post('/lightsabers', [LightsaberController::class, 'store']);
//Route::put('/admin/lightsabers/{lightsaber}', [LightsaberController::class, 'update'])->name('lightsabers.update');
Route::get('/lightsabers/{lightsaber}', [LightsaberController::class, 'show']);
Route::get('/lightsabers/{lightsaber}/edit', [LightsaberController::class, 'edit']);

Route::delete('/lightsabers/{lightsaber}', [LightsaberController::class, 'destroy']); */





Route::resource('/admin/posts', PostController::class);
