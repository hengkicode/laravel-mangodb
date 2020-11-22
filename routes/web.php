<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalController;

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
    return view('auth.login');
  });

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('animal', [AnimalController::class, 'index'])->name('animal');
Route::get('add', [AnimalController::class, 'create'])->name('create');
Route::post('add',[AnimalController::class, 'store'])->name('store');
Route::get('edit/{id}',[AnimalController::class, 'edit'])->name('edit');
Route::post('edit/{id}',[AnimalController::class, 'update'])->name('update');
Route::delete('{id}',[AnimalController::class, 'destroy'])->name('destroy');

