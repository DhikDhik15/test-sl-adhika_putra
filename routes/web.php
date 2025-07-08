<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [UserController::class, 'create'])->name('employees.create');
Route::post('/employees', [UserController::class, 'store'])->name('employees.store');

Route::get('/employees/{employee}/edit', [UserController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [UserController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [UserController::class, 'destroy'])->name('employees.destroy');
