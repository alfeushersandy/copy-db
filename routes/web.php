<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ScanlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::post('/attendance/copy', [AttendanceController::class, 'copy'])->name('copy.database');

Route::get('/scanlog',[ScanlogController::class, 'index'])->name('scanlog.index');
