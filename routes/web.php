<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class, "home"])->name('home');

Route::get('/a-propos',[PagesController::class, "about"])->name('about');

Route::get('/contact',[PagesController::class, "contact"])->name('contact');

Route::get('/cars', [CarController::class, "index"])->name('cars.index');

Route::get('/cars/create', [CarController::class, "create"])->name('cars.create');

Route::post('/cars)', [CarController::class,"store"])->name('cars.store');

Route::get('/cars/{car}/edit', [CarController::class, "edit"])->name('cars.edit');

Route::get('/cars/{car}/update', [CarController::class, "update"])->name('cars.update');

Route::get('/cars/{car}', [CarController::class, "show"])->name('cars.show');


// même chose que les autres au dessus ça génère tout tout seul comme un grand
// Route::resource("cars",CarController::class);

// à la fin !!!
Route::get('/{x}', [PagesController::class, "err404"])->name('404');