<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\GroupeController;

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
    return view('index');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/acceuil', [Acceuil::class, acceuilProf()])->name('acceuil');


Route::get('/acceuil', [AcceuilController::class, 'acceuilProf']);
Route::get('/cours/{idGroupe}', [CoursController::class, 'coursListe']);
Route::get('/cours/eleve/{idGroupe}', [CoursController::class, 'eleveListe']);
Route::get('/cours/absence/{idEleve}/{idGroupe}', [CoursController::class, 'eleveAbsent']);
Route::get('/cours/AJ/{idEleve}/{idGroupe}', [CoursController::class, 'eleveAJ']);
Route::get('/cours/present/{idEleve}/{idGroupe}', [CoursController::class, 'elevePresent']);
Route::get('/groupe/eleves/{idGroupe}', [GroupeController::class, 'listeEleve']);



Route::get('/logout', [LogOutController::class,'logout']);