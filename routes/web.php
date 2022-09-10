<?php

use App\Route;

Route::get(['/', 'App\Controllers\HomeController@index'])->name('Accueil');
Route::get(['/mon-profil', 'App\Controllers\MonProfilController@index'])->name('Profil');
Route::get(['/mes-projets','App\Controllers\MyWorkController@index'])->name('Work');
Route::get(['/temporaire','App\Controllers\TemporaireController@index'])->name('Temporaire');

Route::get(['/detail-projet', 'App\Controllers\DetailController@index'])->name('Detail');

Route::get(['/secret','App\Controllers\SecretController@index'])->name('Secret');