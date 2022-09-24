<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramacionController;
use App\Http\Controllers\EnlacesController;
use App\Http\Controllers\BibliotecaController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/programacion', [ProgramacionController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/biblioteca', [BibliotecaController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/enlaces', [EnlacesController::class, 'index']);


Route::get('/', function () {
    return view('inicio');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
