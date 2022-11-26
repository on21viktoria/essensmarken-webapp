<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('restaurants', RestaurantController::class)
    ->only(['index'])
    ->middleware(['auth', 'verified']);


Route::resource('restaurants', RestaurantController::class)
    ->only(['store', 'create', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified', 'is_admin']);
    
require __DIR__.'/auth.php';
