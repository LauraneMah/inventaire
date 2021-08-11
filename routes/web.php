<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('materiels', \App\Http\Controllers\MaterielController::class);

Route::resource('salles', \App\Http\Controllers\SalleController::class);

Route::resource('personnes', \App\Http\Controllers\PersonneController::class);

Route::resource('materiel-rooms', \App\Http\Controllers\MaterielSalleController::class);

Route::resource('materiel-people', \App\Http\Controllers\MaterielPersonneController::class);

Route::resource('downgradeds', \App\Http\Controllers\DeclasseeController::class);
