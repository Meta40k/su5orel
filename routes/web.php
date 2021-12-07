<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware  . Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');
Route::get('/arenda', [App\Http\Controllers\HomeController::class, 'arenda'])->name('arenda');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/mountgus', [App\Http\Controllers\HomeController::class, 'mountgus'])->name('mountgus');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/vid1', [App\Http\Controllers\HomeController::class, 'vid1'])->name('vid1');
Route::get('/gnb', [App\Http\Controllers\HomeController::class, 'gnb'])->name('gnb');
Route::get('/policy', [App\Http\Controllers\HomeController::class, 'policy'])->name('policy');
Route::get('/cards', [App\Http\Controllers\HomeController::class, 'cards'])->name('cards');




Route::post('/path', [App\Http\Controllers\HomeController::class, 'get_message'])->name('get_message');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
