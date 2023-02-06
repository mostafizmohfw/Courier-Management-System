<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::get('/master', [HomeController::class, 'master'])->name('master');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');

Route::get('/shipment', [HomeController::class, 'shipment'])->name('shipment');
Route::get('/add-shipment', [HomeController::class, 'addShipment'])->name('add-shipment');

Route::get('/employee', [HomeController::class, 'employee'])->name('employee');
Route::get('/add-employee', [HomeController::class, 'addEmployee'])->name('add-employee');

Route::get('/vehicle', [HomeController::class, 'vehicle'])->name('vehicle');
Route::get('/add-vehicle', [HomeController::class, 'addDriver'])->name('add-vehicle');

Route::get('/location', [HomeController::class, 'location'])->name('location');
Route::get('/add-location', [HomeController::class, 'addShipment'])->name('add-location');


Route::get('/add-vehicle', [HomeController::class, 'addDriver'])->name('add-vehicle');

Route::get('/add-payment', [HomeController::class, 'addPayment'])->name('add-payment');
Route::get('/dashboard-profile', [HomeController::class, 'dashboardProfile'])->name('dashboard-profile');
Route::get('/dashboard', [HomeController::class, 'dashboardAdmin'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
