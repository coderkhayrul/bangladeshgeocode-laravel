<?php

use App\Http\Controllers\BangladeshController;
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

Route::get('/', [BangladeshController::class, 'welcome'])->name('bangladesh.welcome');
Route::get('/ajax/district/{id}', [BangladeshController::class, 'getDistrict'])->name('bangladesh.district');
Route::get('/ajax/thana/{id}', [BangladeshController::class, 'getThana'])->name('bangladesh.thana');
Route::get('/ajax/union/{id}', [BangladeshController::class, 'getUnion'])->name('bangladesh.union');

