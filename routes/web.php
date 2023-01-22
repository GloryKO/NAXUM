<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\salesReportController;
use App\Http\Controllers\rankController;
use Illuminate\Http\Request;

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

Route::get('/', [salesReportController::class,'index']);
Route::get('/rank', [rankController::class,'index']);
Route::resource('country','salesReportController');