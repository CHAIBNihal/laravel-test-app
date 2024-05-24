<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\NavBarController;
use App\Http\Controllers\StaticController;
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

Route::get('/',[StaticController::class, "index"] )->name("home.index");
Route::get('/about', [StaticController::class, "about"])->name("home.about");

// Premiere type des filtres par url
Route::get("/contact", [NavBarController::class, "contact"])->name("home.contact");
Route::get("/blog", [NavBarController::class, "Blog"])->name("home.blog");
Route::get('/historique', [NavBarController::class, "historique"]);

// Deuxiem types des filtres par url
Route::get("/Cars/{category?}/{items?}", [StaticController :: class, 'Cars' ]);


// Ressources Routes prend .edit .show .create .update . store .destroy (on voient sa dans le controller de ressouce)
Route::resource('computer', ComputerController::class);
