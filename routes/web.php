<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
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
Route::middleware(['guest'])->group(function() {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});
Route::get('/home', function() {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/murid', [AdminController::class, 'murid'])->middleware('userAkses:murid');
    Route::get('/admin/guru', [AdminController::class, 'guru'])->middleware('userAkses:guru');
    Route::get('/admin/kepsek', [AdminController::class, 'kepsek'])->middleware('userAkses:kepsek');
    Route::get('/logout', [SesiController::class, 'logout']);
});
