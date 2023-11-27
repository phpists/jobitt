<?php

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

Route::get('/', [\App\Http\Controllers\StatisticsSalaryController::class, 'index']);
Route::get('salaries/{position}/{technology?}', [\App\Http\Controllers\StatisticsSalaryController::class, 'index'])->name('salaries');
Route::get('/api/salaries', [\App\Http\Controllers\StatisticsSalaryController::class, 'filter_data'])->name('salaries.filter');
