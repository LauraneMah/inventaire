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

Route::resource('materiel-salles', \App\Http\Controllers\MaterielSalleController::class);

Route::resource('materiel-personnes', \App\Http\Controllers\MaterielPersonneController::class);

Route::resource('declassees', \App\Http\Controllers\DeclasseeController::class);

Route::resource('declassees', \App\Http\Controllers\DeclasseeController::class);


/*Excel import export*/



Route::get('file-export-mr', [\App\Http\Controllers\MaterielSalleController::class, 'fileExport'])->name('file-export-mr');

Route::get('file-export-r/{id}', [\App\Http\Controllers\SalleController::class, 'fileExport'])->name('file-export-r');
