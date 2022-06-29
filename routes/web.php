<?php

use App\Route;

Route::get(['/', 'App\Controllers\HomeController@index'])->name('Accueil');
Route::get(['/MonProfil', 'App\Controllers\MonProfilController@index'])->name('Profil');
Route::get(['/MesProjets','App\Controllers\MyWorkController@index'])->name('Work');
Route::get(['/Temporaire','App\Controllers\TemporaireController@index'])->name('Temporaire');

Route::get(['/Secret','App\Controllers\SecretController@index'])->name('Secret');