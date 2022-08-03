<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallDetails;



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




Route::get('/',[CallDetails::class, 'show']);
Route::post('/add-data',[CallDetails::class,'add']);
Route::post('/search-data',[CallDetails::class, 'fetch']);
Route::get('/searchall-data',[CallDetails::class, 'fetchall']);





