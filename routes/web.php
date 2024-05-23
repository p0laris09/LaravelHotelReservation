<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/reservation/index');
})->name('home');

Route::get('/profile', 'App\Http\Controllers\ReservationController@profile');
Route::get('/contact', 'App\Http\Controllers\ReservationController@contact');
Route::get('/reserve', 'App\Http\Controllers\ReservationController@reserve');
Route::post('/billinfo', 'App\Http\Controllers\ReservationController@store');
Route::get('/billinfo', 'App\Http\Controllers\BillInfoController@index')->name('billinfo');

use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/reservation/{id}/details', [AdminController::class, 'getReservationDetails']);
Route::get('/admin/reservation/{id}/edit', [AdminController::class, 'edit']);
Route::put('/admin/reservation/update', [AdminController::class, 'update'])->name('reservation.update');
Route::patch('/admin/reservation/{id}/archive', [AdminController::class, 'archive'])->name('reservation.archive');
