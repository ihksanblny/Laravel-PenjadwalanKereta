<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layout/dashboard');
});

// Routes for Jadwal Controller
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
Route::post('/jadwal', [JadwalController::class, 'store'])->name('jadwal.store');
Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit'])->name('jadwal.edit');
Route::put('/jadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update');
Route::delete('/jadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.destroy');
Route::get('/jadwal/report/pdf', [JadwalController::class, 'generatePDF'])->name('jadwal.report.pdf');

