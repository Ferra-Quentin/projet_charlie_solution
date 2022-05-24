<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactController;
use App\Http\Controllers\recuperation_donnee_api;

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
    return view('acceuil');
})->name('accueil');

Route::get('/supression', function () {
    return view('choix_suppresion');
})->name('supression');

Route::get('/voir_la_fact/{id}', [FactController::class,'show'])->name('voir_la_fact');
Route::get('/creer_une_fact', [FactController::class,'create'])->name('creer_une_fact');
Route::post('/ajout_fact', [FactController::class,'store'])->name('ajout_fact');
Route::get('/modifier_une_fact/{id}', [FactController::class,'edit'])->name('modifier_une_fact');
Route::post('/mise_ajour_fact', [FactController::class,'update'])->name('mise_a_jour_fact');
Route::get('/voir_les_facts', [FactController::class,'index'])->name('voir_les_facts');
Route::get('/recuperer_les_donnees_api', [recuperation_donnee_api::class,'recuperation_donnee'])->name('recuperer_les_donnees_api');
Route::get('/supprimer_une_fact/{id}', [FactController::class,'destroy'])->name('supprimer_une_fact');
Route::get('/supprimer_les_donnees', [FactController::class,'delete_all'])->name('supprimer_les_facts');
Route::get('/erreur_api', [FactController::class,'delete_all'])->name('erreur_api');

