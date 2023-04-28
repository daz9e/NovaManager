<?php

use App\Http\Controllers\ProfileController;
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
    return view('admin.organisationPage');
});

Route::get('/organisations', [App\Http\Controllers\OrganisationController::class, 'index'])->name("organisations");
Route::post('/organisationsDestroy/{organisation}', [App\Http\Controllers\OrganisationController::class, 'destroy'])->name('organisations.destroy');
Route::post('/organisations/create', [App\Http\Controllers\OrganisationController::class, 'store'])->name('organisations.create');

Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'index'])->name("register");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
