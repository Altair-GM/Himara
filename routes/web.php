<?php

use App\Http\Controllers\FrontController;
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

// {{{{{{{{{{{{{Vieuw Front}}}}}}}}}}}}}

Route::get('/', function () { return view('pages.home');})->name("home");
Route::get("/rooms",[FrontController::class,"rooms"])->name("rooms");
Route::get("/team",[FrontController::class,"team"])->name("team");
Route::get("/gallery",[FrontController::class,"gallery"])->name("gallery");
Route::get("/contact",[FrontController::class,"contact"])->name("contact");
Route::get("/blog",[FrontController::class,"blog"])->name("blog");


// {{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{ Vieuw BackEnd}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}} 

// [[[[[[[[[[[[Complements composants]]]]]]]]]]]]
Route::get("/style-guide",[FrontController::class,"styleGuide"]);
Route::get("/buttons",[FrontController::class,"buttons"]);
Route::get("/icons",[FrontController::class,"icons"]);

// [[[[[[[[[[[[[[Breeze Authentification]]]]]]]]]]]]]]
Route::get('/dashboard', function () 
{return view('dashboard');})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
