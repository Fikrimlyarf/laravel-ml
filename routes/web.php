<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\LaneController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-hero', [HeroController::class, 'listHero'])->name('hero.list-hero');

Route::get('/list-hero/tambah', [HeroController::class, 'tambah'])->name('hero.tambah');

Route::post('/list-hero/submit', [HeroController::class, 'submit'])->name('hero.submit');

Route::get('/list-hero/edit/{id}', [HeroController::class, 'edit'])->name('hero.edit');

Route::post('/list-hero/update/{id}', [HeroController::class, 'update'])->name('hero.update');

Route::post('/list-hero/delete/{id}', [HeroController::class, 'delete'])->name('hero.delete');

Route::get('/list-role', [RoleController::class, 'listRole'])->name('role.list-role');

Route::get('/list-role/tambah', [RoleController::class, 'tambah'])->name('role.tambah');

Route::post('/list-role/submit', [RoleController::class, 'submit'])->name('role.submit');

Route::get('/list-role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');

Route::post('/list-role/update/{id}', [RoleController::class, 'update'])->name('role.update');

Route::post('/list-role/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');

Route::resource('lane', LaneController::class);