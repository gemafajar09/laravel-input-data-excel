<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserappController;

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

Route::get('/', [UserappController::class, 'index']);
Route::post('uploadFile', [UserappController::class, 'createFile'])->name('uploadFile');
Route::get('exportFile', [UserappController::class, 'export'])->name('exportFile');
