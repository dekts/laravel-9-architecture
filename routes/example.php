<?php

use App\Http\Controllers\Example\ExamplesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('examples', [ExamplesController::class, 'index'])->name('examples.index');
    Route::get('examples/create', [ExamplesController::class, 'create'])->name('examples.create');
    Route::post('examples', [ExamplesController::class, 'store'])->name('examples.store');
    Route::get('examples/{id}', [ExamplesController::class, 'show'])->name('examples.show');
    Route::get('examples/{id}/edit', [ExamplesController::class, 'edit'])->name('examples.edit');
    Route::patch('examples/{id}', [ExamplesController::class, 'update'])->name('examples.update');
    Route::delete('examples/{id}', [ExamplesController::class, 'destroy'])->name('examples.destroy');
});