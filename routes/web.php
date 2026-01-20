<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->route('inventory.index');
    })->name('dashboard');

    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('inventory', InventoryController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('mahasiswa', App\Http\Controllers\MahasiswaController::class)->middleware('auth');
// Route::resource('inventory', App\Http\Controllers\InventoryController::class)->middleware('auth');

require __DIR__.'/auth.php';
