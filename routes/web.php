<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',[Controller::class, 'index'])->name('index');
Route::get('/inventaris',[Controller::class, 'inventaris'])->name('inventaris');
Route::post('/inventaris/store',[Controller::class, 'store'])->name('store.inventaris');
Route::put('/inventaris/update/{id}',[Controller::class, 'update'])->name('update.inventaris');
Route::delete('/inventaris/delete/{id}',[Controller::class, 'destroy'])->name('destroy.inventaris');
