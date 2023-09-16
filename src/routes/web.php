<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', [ContactController::class, 'index']);
Route::get('/contact/confirm', [ContactController::class, 'confirm']);
Route::post('/contact/complete', [ContactController::class, 'store']);
Route::get('/manage', [ContactController::class, 'manage']);
Route::get('/manage/list', [ContactController::class, 'manageList']);
Route::post('/manage/list', [ContactController::class, 'manageList']);
Route::post('/delete', [ContactController::class, 'delete']);