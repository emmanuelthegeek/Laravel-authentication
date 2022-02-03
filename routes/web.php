<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LogoutController;



Route::get('/', [PagesController::class, 'index']);

Route::get('/laravel', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
 });
