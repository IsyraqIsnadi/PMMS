<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\paymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Report routes
// Report routes
Route::get('/reports', [ReportController::class, 'index'])->name('report.index');
Route::get('/reports/create', [ReportController::class, 'create'])->name('report.create');
Route::post('/reports', [ReportController::class, 'store'])->name('report.store');
Route::get('/reports/{report}', [ReportController::class, 'show'])->name('report.show');
Route::get('/reports/{report}/edit', [ReportController::class, 'edit'])->name('report.edit');
Route::put('/reports/{report}', [ReportController::class, 'update'])->name('report.update');
Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('report.destroy');

//Manage Roster

Route::get('/roster', [RosterController::class, 'index'])->name('roster.index');
Route::get('/roster/create', [RosterController::class, 'create'])->name('roster.create');
Route::post('/roster', [RosterController::class, 'store'])->name('roster.store');
Route::get('/roster/{roster}/edit', [RosterController::class, 'edit'])->name('roster.edit');
Route::put('/roster/{roster}/update', [RosterController::class, 'update'])->name('roster.update');
Route::delete('/roster/{roster}/destroy', [RosterController::class, 'destroy'])->name('roster.destroy');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');
    Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');
    Route::get('/payment/{payment}/edit', [PaymentController::class, 'edit'])->name('payment.edit');
    Route::put('/payment/{payment}', [PaymentController::class, 'update'])->name('payment.update');
    Route::delete('/payment/{payment}', [PaymentController::class, 'destroy'])->name('payment.destroy');

}); 
require __DIR__ . '/auth.php';
