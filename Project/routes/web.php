<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ReservationController;
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


//Route::get('/index', [CarController::class, 'index']);

Route::get('/main', [CarController::class, 'index'])->name('dashboard');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/list', [CarController::class, 'getMyCars'])->name('list');
    Route::resource('car', CarController::class);
    Route::resource('reservation', ReservationController::class);
    Route::post('/car/{id}', [ReservationController::class, 'store']);


});



require __DIR__.'/auth.php';
