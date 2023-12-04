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
Route::post('authenticate', [\App\Http\Controllers\Admin\AuthController::class, 'authenticate'])->name('login');
Route::post('register', [\App\Http\Controllers\Admin\AuthController::class, 'register'])->name('register');
Route::get('/', [\App\Http\Controllers\StatisticsSalaryController::class, 'index'])->name('home');
Route::get('/salaries/Israel', [\App\Http\Controllers\StatisticsSalaryController::class, 'index'])->name('index');
Route::get('/salaries', function () {
    return redirect()->route('index');
});
Route::get('salaries/Israel/{position}/{technology?}', [\App\Http\Controllers\StatisticsSalaryController::class, 'index'])->name('salaries');
Route::get('/api/salaries', [\App\Http\Controllers\StatisticsSalaryController::class, 'stats_data'])->name('salaries.filter');
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('pages', [\App\Http\Controllers\Admin\EditPageController::class, 'index'])->name('admin.pages.index');
        Route::get('pages/edit/{id}', [\App\Http\Controllers\Admin\EditPageController::class, 'edit'])->name('admin.pages.edit');
        Route::get('pages/create', [\App\Http\Controllers\Admin\EditPageController::class, 'create'])->name('admin.pages.create');
        Route::post('pages/update', [\App\Http\Controllers\Admin\EditPageController::class, 'update'])->name('admin.pages.update');
        Route::post('pages/store', [\App\Http\Controllers\Admin\EditPageController::class, 'store'])->name('admin.pages.store');
        Route::delete('pages/delete/{id}', [\App\Http\Controllers\Admin\EditPageController::class, 'delete'])->name('admin.pages.delete');
    });
});

Route::get('logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
}) ->name('logout');
