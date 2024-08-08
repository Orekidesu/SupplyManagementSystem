<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Make route for the transaction,reports, stocks pages
Route::get('/transactions', function () {
    return view('pages.transactions.index');
})->middleware(['auth', 'verified'])->name('transactions');

Route::get('/reports', function () {
    return view('pages.reports.index');
})->middleware(['auth', 'verified'])->name('reports');

Route::get('/stocks', function () {
    return view('pages.stocks.index');
})->middleware(['auth', 'verified'])->name('stocks');




require __DIR__ . '/auth.php';
