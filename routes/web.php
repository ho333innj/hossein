<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/advert.create', [AdvertController::class, 'createadvert'])->name('newadvertshow');
Route::post('/advert.insert', [AdvertController::class, 'insert'])->name('newadvert');
Route::get('/advert.all', [AdvertController::class, 'advertshow'])->name('advertslist');


Route::post('/advert.edit/{id}', [AdvertController::class, 'editAdvert'])->name('editadvertshow');
Route::patch('/advert.update/{id}', [AdvertController::class, 'updateAdvert'])->name('updateadvert');
Route::delete('/advert.delete/{id}', [AdvertController::class, 'deleteAdvert'])->name('deleteadvert');
