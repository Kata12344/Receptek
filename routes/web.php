<?php

use App\Http\Controllers\Receptcontroller;
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
Route::get('/minden', [Receptcontroller::class, 'minden']);
Route::get('/kategoriak', [Receptcontroller::class, 'kategoriak']);
Route::get('/', function () {
    return view('index');
});
