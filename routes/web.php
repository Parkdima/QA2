<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SellController;

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
Route::get('/houses', [HouseController::class, 'index'])->name('houses.index');
Route::get('/houses/create', [HouseController::class, 'create'])->name('houses.create');
Route::post('/houses', [HouseController::class, 'store'])->name('houses.store');
Route::get('/houses/show/{house}', [HouseController::class, 'show'])->name('houses.show');
Route::get('/houses/edit/{house}', [HouseController::class, 'edit'])->name('houses.edit');
Route::put('/houses/update/{house}', [HouseController::class, 'update'])->name('houses.update');
Route::delete('/houses/delete/{house}', [HouseController::class, 'destroy'])->name('houses.delete');
Route::get('/flats', [FlatController::class, 'index'])->name('flats.index');
Route::get('/flats/create', [FlatController::class, 'create'])->name('flats.create');
Route::post('/flats', [FlatController::class, 'store'])->name('flats.store');
Route::get('/flats/show/{flat}', [FlatController::class, 'show'])->name('flats.show');
Route::get('/flats/edit/{flat}', [FlatController::class, 'edit'])->name('flats.edit');
Route::put('/flats/update/{flat}', [FlatController::class, 'update'])->name('flats.update');
Route::delete('/flats/delete/{flat}', [FlatController::class, 'destroy'])->name('flats.delete');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/show/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/edit/{client}', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/update/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/delete/{client}', [ClientController::class, 'destroy'])->name('clients.delete');
Route::get('/sells', [SellController::class, 'index'])->name('sells.index');
Route::get('/sells/create', [SellController::class, 'create'])->name('sells.create');
Route::post('/sells', [SellController::class, 'store'])->name('sells.store');
Route::get('/sells/show/{sell}', [SellController::class, 'show'])->name('sells.show');
Route::get('/sells/edit/{sell}', [SellController::class, 'edit'])->name('sells.edit');
Route::put('/sells/update/{sell}', [SellController::class, 'update'])->name('sells.update');
Route::delete('/sells/delete/{sell}', [SellController::class, 'destroy'])->name('sells.delete');