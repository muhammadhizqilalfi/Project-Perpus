<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BorrowingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $role = Auth::user()->role;

    if ($role === 'admin') {
        return view('admin.dashboard');
    } else {
        return view('user.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function() {
    Route::get('/library', [LibraryController::class, 'index'])->name('library.index');
    Route::get('/library/search', [LibraryController::class, 'search'])->name('library.search');
    Route::get('/library/borrowings', [LibraryController::class, 'borrowings'])->name('library.borrowings')->middleware('auth');
    Route::get('/library/fines', [LibraryController::class, 'fines'])->name('library.fines')->middleware('auth');
    Route::post('/library/reserve/{book}', [LibraryController::class, 'reserve'])->name('library.reserve');
    Route::get('/library/reservations', [LibraryController::class, 'reservations'])->name('library.reservations');
    Route::post('/reservations/{id}/cancel', [LibraryController::class, 'cancelReservation'])
        ->name('library.cancel')
        ->middleware('auth');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('books', App\Http\Controllers\Admin\BookController::class)->except(['show']);
    Route::resource('borrowings', \App\Http\Controllers\Admin\BorrowingController::class)->only(['index']);
    Route::resource('fines', \App\Http\Controllers\Admin\FineController::class)->only(['index']);
    Route::resource('reservations', \App\Http\Controllers\Admin\ReservationController::class)->only(['index']);
    Route::post('reservations/{id}/approve', [\App\Http\Controllers\Admin\ReservationController::class, 'approve'])
        ->name('reservations.approve');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/borrowings', [App\Http\Controllers\Admin\BorrowingController::class, 'index'])->name('borrowings.index');
    Route::get('borrowings/export-pdf', [BorrowingController::class, 'exportPdf'])->name('borrowings.exportPdf');
    Route::get('/admin/reservations/export-pdf', [App\Http\Controllers\Admin\ReservationController::class, 'exportPdf'])->name('reservations.exportPdf');

});
