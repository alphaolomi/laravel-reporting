<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pdf', [App\Http\Controllers\DomPdfReportController::class, 'download'])->name('pdf.download');


// /laraveldaily
Route::get('/daily', [App\Http\Controllers\LaravelDailyController::class, 'advaned'])->name('laraveldaily.advaned');
Route::get('/daily/simple', [App\Http\Controllers\RandomController::class, 'simple'])->name('laraveldaily.simple');

// /
Route::get('users/export/', [UserController::class, 'export']);
