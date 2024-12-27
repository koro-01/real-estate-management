<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\NotaireController;
use App\Http\Controllers\VendeurController;
use App\Http\Controllers\TerrainController;
use App\Http\Controllers\DossierTerrainController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Define the export route explicitly
Route::get('dossier-terrains/export-pdf', [DossierTerrainController::class, 'exportPDF'])->name('dossier-terrains.export-pdf');
Route::get('dossier-terrains/export-ex', [DossierTerrainController::class, 'exportEX'])->name('dossier-terrains.export-ex');

// Define resource routes
Route::resources([
    'cabinets' => CabinetController::class,
    'notaires' => NotaireController::class,
    'vendeurs' => VendeurController::class,
    'terrains' => TerrainController::class,
    'dossier-terrains' => DossierTerrainController::class,
]);