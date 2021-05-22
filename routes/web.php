<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FWController;
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

Route::get('', [FWController::class, 'index']);
Route::get('index0209', [FWController::class, 'index']);
Route::get('art0209', [FWController::class, 'art']);
Route::get('con0209', [FWController::class, 'contact']);
