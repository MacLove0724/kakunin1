<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kakuninController;
use App\Http\Controllers\kanriController;
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
Route::get('/', [kakuninController::class, 'a']);
Route::get('/aa', [kakuninController::class, 'kanri']);
Route::post('/a/b', [kakuninController::class, 'b']);
Route::post('/a', [kakuninController::class, 'store']);
Route::post('/c', [kakuninController::class, 'a']);
Route::post('/', [kakuninController::class, 'back']);
