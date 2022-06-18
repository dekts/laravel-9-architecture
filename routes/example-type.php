<?php

/**
 * ExampleType WEB Routes
 */

use App\Http\Controllers\ExampleType\ExampleTypesController;
use Illuminate\Support\Facades\Route;

Route::get('example-types', [ExampleTypesController::class, 'index'])->name('example_types.index');
Route::get('example-types/create', [ExampleTypesController::class, 'create'])->name('example_types.create');
Route::post('example-types', [ExampleTypesController::class, 'store'])->name('example_types.store');
Route::get('example-types/{id}', [ExampleTypesController::class, 'show'])->name('example_types.show');
Route::get('example-types/{id}/edit', [ExampleTypesController::class, 'edit'])->name('example_types.edit');
Route::patch('example-types/{id}', [ExampleTypesController::class, 'update'])->name('example_types.update');
Route::delete('example-types/{id}', [ExampleTypesController::class, 'destroy'])->name('example_types.destroy');
