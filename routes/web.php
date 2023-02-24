<?php

use App\Models\commandeVente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\videosController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\TypeProduitController;
use App\Http\Controllers\CommandeVenteController;
use App\Http\Controllers\LigneCommandeVenteController;

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
    return view('welcome');
});

Route::get('/search',[ClientController::class, 'search'])->middleware(['auth', 'verified','admin']);

Route::resource('clients', ClientController::class)->middleware(['auth', 'verified','admin']);
Route::resource('commandeVentes', CommandeVenteController::class)->middleware(['auth', 'verified','admin']);
Route::resource('videos', videosController::class)->middleware(['auth', 'verified','admin']);
Route::resource('ligneCommandeVente', LigneCommandeVenteController::class)->middleware(['auth', 'verified','admin']);
Route::resource('typeProduits', TypeProduitController::class)->middleware(['auth', 'verified','admin']);
Route::resource('produits', ProduitController::class)->middleware(['auth', 'verified','admin']);


Route::resource('profile', ProfileController::class)->middleware(['auth', 'verified']);
Route::resource('password', PasswordController::class)->middleware(['auth', 'verified']);

Auth::routes();

Route::get('e-learning', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Route::middleware(['auth'])->group(function () {
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('profile/{user}',[ProfileController::class,'update'])->name('profile.update');
  }); */