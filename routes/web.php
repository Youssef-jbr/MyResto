<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
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

/* Route::view('/', 'welcome')->name('home'); */

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});

Route::get('password/reset', Email::class)->name('password.request');
Route::get('password/reset/{token}', Reset::class)->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)->middleware('throttle:6,1')->name('verification.notice');
    Route::get('password/confirm', Confirm::class)->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)->middleware('signed')->name('verification.verify');
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::prefix('commande')->group(function () {
    Route::get('/index', [App\Http\Controllers\CommandesController::class, 'index'])->name('commandes.index')->middleware('auth');
    Route::get('/a_emporter', [App\Http\Controllers\CommandesController::class, 'commandeAEmporter'])->name('commandes.emporter')->middleware('auth');
    Route::post('/a_emporter/articles/store', [App\Http\Controllers\CommandesController::class, 'storeArticlesCommandeAEmporter'])->name('commandes.articles.store')->middleware('auth');
    Route::get('/livraison', [App\Http\Controllers\CommandesController::class, 'commandeEnLivraison'])->name('commandes.livraison')->middleware('auth');
    Route::get('/livraison/adresse', [App\Http\Controllers\UserController::class, 'adresseForm'])->name('commandes.livraison.adresse')->middleware('auth');
    Route::post('/livraison/adresse/store', [App\Http\Controllers\UserController::class, 'storeAdresseForm'])->name('commandes.livraison.adresse.store')->middleware('auth');
    Route::post('/livraison/articles/store', [App\Http\Controllers\CommandesController::class, 'storeArticlesCommandeEnLivraison'])->name('commandes.articlesLivre.store')->middleware('auth');
});

