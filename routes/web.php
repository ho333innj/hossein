<?php

use App\Models\Advert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAdvertController;


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
    $adverts= Advert::all();
    return view('home' , ['adverts' => $adverts]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth' , 'verified')->group(function () {
// Route::get('/advertdash', function () {
//     $adverts= Advert::all();
//     return view('advertdash' , ['adverts' => $adverts]);
// })->name('advertdash');
// });
Route::middleware('auth' , 'verified')->group(function () {
    Route::get('/adverstdash', [AdvertController::class , 'index'])->name('advertsdash');

    Route::middleware(['is_admin'])->name('admin.')->prefix('admin')
    ->group(function(){
    Route::get("/" , [AdminController::class , 'index'])->name('index');
    Route::get('/advertsdash', [AdminAdvertController::class , 'index'])->name('advertsdash');



    });
});



















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

Route::get('/mail.send',[MailController::class , 'send']);
Route::get('/a', [AdvertController::class, 'test'])->name('test');



