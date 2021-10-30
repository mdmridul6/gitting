<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(function () {

    // Route::get('/', [\App\Http\Controllers\Permission\RolesController::class, 'index'])->name('index');
    // Route::get('/create', [\App\Http\Controllers\Permission\RolesController::class, 'create'])->name('create');
    // Route::post('/create', [\App\Http\Controllers\Permission\RolesController::class, 'store'])->name('create');
    // Route::get('/edit/{id}', [\App\Http\Controllers\Permission\RolesController::class, 'edit'])->name('edit');
    // Route::put('/edit/{id}', [\App\Http\Controllers\Permission\RolesController::class, 'update'])->name('edit');
    // Route::delete('/delete/{id}', [\App\Http\Controllers\Permission\RolesController::class, 'destroy'])->name('delete');
    Route::resource('role', \App\Http\Controllers\Permission\RolesController::class);
});
