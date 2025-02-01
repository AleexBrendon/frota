<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbastecimentoController;
use App\Http\Controllers\DespesaController;
use App\Http\Controllers\VeiculoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('abastecimentos', AbastecimentoController::class);
Route::get('/abastecimentos', [AbastecimentoController::class, 'index'])->name('abastecimentos.index');
Route::post('/abastecimentos/create', [AbastecimentoController::class, 'store']);

Route::resource('despesas', DespesaController::class);
Route::get('/despesas', [DespesaController::class, 'index'])->name('despesas.index');
Route::post('/despesas/create', [DespesaController::class, 'store']);
Route::get('/despesas/{id}/show', [DespesaController::class, 'show'])->name('despesas.show');
Route::get('/despesas/{id}/download', [DespesaController::class, 'download'])->name('despesas.download');

Route::resource('veiculos', VeiculoController::class);
Route::get('/veiculos', [VeiculoController::class, 'index'])->name('veiculos.index');
Route::post('/veiculos/create', [VeiculoController::class, 'store']);
Route::get('/veiculos/{id}/show', [VeiculoController::class, 'show'])->name('veiculos.show');



require __DIR__.'/auth.php';
