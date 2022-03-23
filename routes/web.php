<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
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
// Route::get('/', [FrontController::class,'home'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::post('/blog/search', [FrontController::class, 'search'])->name('article.search');
Route::get('/blog/search/tag/{id}', [FrontController::class, 'tagCategorie'])->name('article.tagCategorie');
Route::get('/blog/search/categorie/{id}', [FrontController::class, 'searchCategorie'])->name('article.categorie');
Route::get('/booking/form', [FrontController::class, 'booking/form']);
Route::get('/buttons', [FrontController::class, 'buttons']);
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/event/details', [FrontController::class, 'event/details']);
Route::get('/events', [FrontController::class, 'events']);
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/icons', [FrontController::class, 'icons']);
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/loading', [FrontController::class, 'loading']);
Route::get('/page', [FrontController::class, 'page']);
Route::get('/rooms/list', [FrontController::class, 'roomlist'])->name('rooms');
Route::post('/rooms/search', [FrontController::class, 'search'])->name('RoomSearch');
Route::get('/room/{id}', [FrontController::class, 'room']);
Route::get('/rooms/search/{id}/categorie', [FrontController::class, 'searchRoomCategorie'])->name('roomCategorie');
Route::get('/rooms/search/{id}/tags', [FrontController::class, 'tagRooms'])->name('tagRooms');
Route::get('/staff', [FrontController::class, 'staff'])->name('team');
Route::get('/style/guide', [FrontController::class, 'style/guide']);



// {{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{ Vieuw BackEnd}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}} 

// [[[[[[[[[[[[Dashboard]]]]]]]]]]]]

Route::get("/dashboard/caroussel", [CarouselController::class, "index"])->name("caroussel");
Route::get("/dashboard/gallery", [GalleryController::class, "index"])->name("admin.gallery");
Route::get("/dashboard/chambres", [ChambreController::class, "index"])->name("admin.chambres");
Route::get("/dashboard/contact", [ContactController::class, "index"])->name("admin.contact");
Route::get("/dashboard/article", [ArticlesController::class, "index"])->name("admin.article");

// {{ Articles }}
Route::get("/dashboard/article/create", [ArticlesController::class, "create"])->name("admin.article.create");
Route::post("/dashboard/article/store", [ArticlesController::class, "store"])->name("admin.article.store");
Route::get("/dashboard/article/edit/{id}", [ArticlesController::class, "edit"])->name("admin.article.edit");
Route::put("/dashboard/article/edit/{id}", [ArticlesController::class, "udpate"])->name("admin.article.update");
Route::delete("/dashboard/article/delete/{id}", [ArticlesController::class, "destroy"])->name("admin.article.delete");

// {{ Chambres }}
Route::get("/dashboard/chambres/create", [ChambreController::class, "create"])->name("admin.chambres.create");
Route::post("/dashboard/chambres/store", [ChambreController::class, "store"])->name("admin.chambres.store");
Route::get("/dashboard/chambres/edit/{id}", [ChambreController::class, "edit"])->name("admin.chambres.edit");
Route::put("/dashboard/chambres/edit/{id}", [ChambreController::class, "udpate"])->name("admin.chambres.update");
Route::delete("/dashboard/chambres/delete/{id}", [ChambreController::class, "destroy"])->name("admin.chambres.delete");

// {{ Carousel }}

Route::get("/dashboard/carousel/edit/{id}", [CarouselController::class, "edit"])->name("admin.carousel.edit");
Route::put("/dashboard/carousel/edit/{id}", [CarouselController::class, "udpate"])->name("admin.carousel.update");

// [[[[[[[[[[[[Complements composants]]]]]]]]]]]]

Route::get("/style-guide", [FrontController::class, "styleGuide"]);
Route::get("/buttons", [FrontController::class, "buttons"]);
Route::get("/icons", [FrontController::class, "icons"]);

// [[[[[[[[[[[[[[Breeze Authentification]]]]]]]]]]]]]]
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__ . '/auth.php';
