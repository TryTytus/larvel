<?php

use App\Http\Controllers\posts;
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


Route::get('/', [posts::class, 'index']);
Route::get('/post/{id}', [posts::class, 'show']);
Route::get('/create', [posts::class, 'create']);
Route::post('/create', [posts::class, 'store']);
Auth::routes();

