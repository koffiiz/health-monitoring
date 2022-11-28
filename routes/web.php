<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionsController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', [ DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/bmi-details', [ ActionsController::class, 'bmi_index'])->middleware(['auth', 'verified'])->name('bmi-index');

// Profile Updates
Route::get('/edit-profile', [ ActionsController::class, 'editProfile'])->middleware(['auth', 'verified'])->name('edit-profile');
Route::post('/update-profile', [ ActionsController::class, 'updateProfile'])->middleware(['auth', 'verified'])->name('update-profile');


// Activity Tracker 
Route::get('/activity-tracker', [ ActionsController::class, 'activityTracker'])->middleware(['auth', 'verified'])->name('activity-tracker');

// Notification
Route::get('/notification', [ ActionsController::class, 'notification'])->middleware(['auth', 'verified'])->name('notification');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('profile');

require __DIR__.'/auth.php';
