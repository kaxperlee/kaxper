<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramacionController;
use App\Http\Controllers\EnlacesController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\PianoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\TecladoController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/programacion', [ProgramacionController::class, 'index'])->name('programacion.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/biblioteca', [BibliotecaController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/enlaces', [EnlacesController::class, 'index'])->name('enlaces.index');
Route::middleware(['auth:sanctum', 'verified'])->post('/enlaces', [EnlacesController::class, 'store'])->name('enlaces.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/agenda/{mes?}', [AgendaController::class, 'index'])->name('agenda.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/agendaday/{fecha}', [AgendaController::class, 'indexday'])->name('agenda.indexday');
Route::middleware(['auth:sanctum', 'verified'])->get('/agenda-week/{fecha}', [AgendaController::class, 'indexWeek'])->name('agenda.indexWeek');
Route::middleware(['auth:sanctum', 'verified'])->get('/agenda/semana/{fecha}', [AgendaController::class, 'semana'])->name('agenda.semana');
Route::middleware(['auth:sanctum', 'verified'])->post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/tarea', [TareaController ::class, 'index'])->name('tarea.index');
Route::middleware(['auth:sanctum', 'verified'])->post('/tarea', [TareaController::class, 'store'])->name('tarea.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/teclado', [TecladoController::class, 'index'])->name('teclado.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/teclado/fichero', [TecladoController::class, 'fichero'])->name('teclado.fichero');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
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
