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

// Water Intake
Route::get('/water-intake', [ ActionsController::class, 'waterIntake'])->middleware(['auth', 'verified'])->name('water-intake');
Route::post('/water-intake', [ ActionsController::class, 'waterIntakeUpdate'])->middleware(['auth', 'verified'])->name('water-intake-update');

// Water Intake
Route::get('/sleep-tracker', [ ActionsController::class, 'sleepTracker'])->middleware(['auth', 'verified'])->name('sleep-tracker');
Route::post('/sleep-tracker', [ ActionsController::class, 'sleepTrackerUpdate'])->middleware(['auth', 'verified'])->name('sleep-tracker-update');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('profile');

require __DIR__.'/auth.php';
