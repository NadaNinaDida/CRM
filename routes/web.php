<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\Auth\RegisteredUserController;

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/addUser', [RegisteredUserController::class, 'create'])->name('regester');
    Route::get('/listUsers', [RegisteredUserController::class, 'users'])->name('listUsers');
Route::post('/regester/store', [RegisteredUserController::class, 'store'])->name('regester.store');
    Route::get('/dashboard', [ClientController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/recherche',[ClientController::class, 'recherche'])->name('recherche');
    Route::get('/clients/showClient/{id}',[ClientController::class, 'edit'])->name('clients.edit');
    Route::get('/createClient',[ClientController::class, 'create']);
    Route::post('/storeClient',[ClientController::class, 'store'])->name('clients.store');
    Route::delete('/deleteClient/{id}',[ClientController::class, 'destroy'])->name('clients.destroy');
    Route::post('/clients/update/{id}',[ClientController::class, 'update'])->name('clients.update');

    // /visits
    Route::get('/visits', [VisitController::class, 'index'])->name('dashboard');
    Route::get('/visits/recherche',[VisitController::class, 'recherche'])->name('visits.recherche');
    Route::get('/visits/showVisits/{id}',[VisitController::class, 'edit'])->name('visits.edit');
    Route::get('/visits/create',[VisitController::class, 'create']);
    Route::post('/visits/store',[VisitController::class, 'store'])->name('visits.store');
    Route::post('/visits/update/{id}',[VisitController::class, 'update'])->name('visit.update');
    Route::delete('/visits/destroy/{id}',[VisitController::class, 'destroy'])->name('visits.destroy');
});

require __DIR__.'/auth.php';
