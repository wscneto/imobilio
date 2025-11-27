<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('inquilinos', function () {
    return Inertia::render('Inquilinos');
})->middleware(['auth', 'verified'])->name('inquilinos');

Route::get('contratos', function () {
    return Inertia::render('Contratos');
})->middleware(['auth', 'verified'])->name('contratos');

Route::get('financeiro', function () {
    return Inertia::render('Financeiro');
})->middleware(['auth', 'verified'])->name('financeiro');

Route::get('relatorios', function () {
    return Inertia::render('Relatorios');
})->middleware(['auth', 'verified'])->name('relatorios');

require __DIR__.'/settings.php';
