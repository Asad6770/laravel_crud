<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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
    return view('home');
});
Route::get('/create', [CrudController::class, 'create']);
Route::post('/create', [CrudController::class, 'store'])->middleware('auth');
Route::get('/index', [CrudController::class, 'index'])->middleware('auth');
Route::get('/edit/{id}', [CrudController::class, 'edit'])->middleware('auth');
Route::put('/edit/{id}', [CrudController::class, 'update'])->middleware('auth');
Route::get('/delete/{id}', [CrudController::class, 'destroy'])->middleware('auth');
Route::get('/view/{id}', [CrudController::class, 'show'])->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

