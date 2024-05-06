<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\ProduitsController; 
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');


// Route Index
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/factures', [FactureController::class, 'index'])->name('factures.index');
Route::get('/rdvs', [RdvController::class, 'index'])->name('rdvs.index');
Route::get('/produits', [ProduitsController::class, 'index'])->name('produits.index');

// Route Show
Route::get('/clients/{idCli}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/factures/{idFacture}', [FactureController::class, 'show'])->name('factures.show');
Route::get('/rdvs/{idRdv}', [RdvController::class, 'show'])->name('rdvs.show');
Route::get('/produits/{idProduit}', [ProduitsController::class, 'show'])->name('produits.show');

// Route Destroy
Route::delete('/clients/{idCli}', [ClientController::class, 'destroy'])->name('clients.destroy');
Route::delete('/factures/{idFacture}', [FactureController::class, 'destroy'])->name('factures.destroy');
Route::delete('/rdvs/{idRdv}', [RdvController::class, 'destroy'])->name('rdvs.destroy');
Route::delete('/produits/{idProduit}', [ProduitsController::class, 'destroy'])->name('produits.destroy');

//Route Create 
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class,'store'])->name('clients.store');


Route::get('/rdvs/create', [RdvController::class, 'create'])->name('rdvs.create');
Route::post('/rdvs', [RdvController::class, 'store'])->name('rdvs.store');
