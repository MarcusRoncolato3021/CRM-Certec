<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrcamentoController;

Route::get('/', function () {
    return redirect()->route('admin.orcamentos.index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/orcamentos', [OrcamentoController::class, 'index'])->name('orcamentos.index');
    Route::get('/orcamentos/{orcamento}', [OrcamentoController::class, 'show'])->name('orcamentos.show');
});
