
<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StaffController;
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
Route::get('/', [FrontController::class, 'index'])->name('home');

// Section Blog
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
//  {{Recheche Blog}}
Route::post('/blog/search', [FrontController::class, 'search'])->name('article.search');
Route::get('/blog/search/tag/{id}', [FrontController::class, 'tagCategorie'])->name('article.tagCategorie');
Route::get('/blog/search/categorie/{id}', [FrontController::class, 'searchCategorie'])->name('article.categorie');
// {{Blog show}}
Route::get('/blog/{id}', [FrontController::class, 'blogPost'])->name('blog.show');
Route::post('/blog/{id}/comment', [CommentController::class, 'store'])->name('comment.store');
Route::get('/booking/form', [FrontController::class, 'booking_form'])->name('booking.form');
Route::get('/buttons', [FrontController::class, 'buttons']);
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/event/details', [FrontController::class, 'event/details']);
Route::get('/events', [FrontController::class, 'events']);
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/icons', [FrontController::class, 'icons']);
Route::get('/loading', [FrontController::class, 'loading']);
Route::get('/page', [FrontController::class, 'page']);
// Section Room
Route::get('/rooms/list', [FrontController::class, 'roomlist'])->name('rooms');
// {{Recherche Room}}
Route::post('/rooms/search', [FrontController::class, 'RoomSearch'])->name('RoomSearch');
Route::get('/rooms/search/{id}/categorie', [FrontController::class, 'searchRoomCategorie'])->name('roomCategorie');
Route::get('/rooms/search/{id}/tags', [FrontController::class, 'tagRooms'])->name('tagRooms');
// {{Room show}}
Route::get('/room/{id}', [FrontController::class, 'room'])->name('room.show');
Route::get('/staff', [FrontController::class, 'staff'])->name('team');
Route::get('/style/guide', [FrontController::class, 'style/guide']);


// {{ {{ {{ {{ Mailing }} }} }} }}
Route::post('contact/send', [ContactController::class, 'store'])->name('contact.store');
// {{ Reservation }}
Route::post("/reservation/store", [ReservationController::class, "store"])->name("reservation.store");


// {{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{{ Vieuw BackEnd}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}
Route::middleware('auth')->group(function () {

    // [[[[[[[[[[[[Dashboard]]]]]]]]]]]]
    Route::get("/dashboard/caroussel", [CarouselController::class, "index"])->name("caroussel");
    Route::get("/dashboard/gallery", [GalleryController::class, "index"])->name("admin.gallery");
    Route::get("/dashboard/chambres", [ChambreController::class, "index"])->name("admin.chambres");
    Route::get("/dashboard/contact", [InfoController::class, "index"])->name("admin.contact");
    Route::get("/dashboard/article", [ArticlesController::class, "index"])->name("admin.article");
    Route::get("/dashboard/reservation", [ReservationController::class, "index"])->name("admin.reservation");
    Route::get("/dashboard/staff", [StaffController::class, "index"])->name("admin.staff");
    Route::get("/dashboard/comment", [CommentController::class, "index"])->name("admin.comment");
    // Route::get("/dashboard/review", [ReviewController::class, "index"])->name("admin.review");

    // {{ Articles }}
    Route::get("/dashboard/article/create", [ArticlesController::class, "create"])->name("admin.article.create");
    Route::post("/dashboard/article/store", [ArticlesController::class, "store"])->name("admin.article.store");
    Route::get("/dashboard/article/edit/{id}", [ArticlesController::class, "edit"])->name("admin.article.edit");
    Route::put("/dashboard/article/edit/{id}", [ArticlesController::class, "update"])->name("admin.article.update");
    Route::delete("/dashboard/article/delete/{id}", [ArticlesController::class, "destroy"])->name("admin.article.delete");

    // {{ Commentaires }}

    Route::get('/dashboard/comments/{id}/validate', [CommentController::class, 'update'])->name('comment.validate');

    // {{ Chambres }}
    Route::get("/dashboard/chambres/create", [ChambreController::class, "create"])->name("admin.chambres.create");
    Route::post("/dashboard/chambres/store", [ChambreController::class, "store"])->name("admin.chambres.store");
    Route::get("/dashboard/chambres/edit/{id}", [ChambreController::class, "edit"])->name("admin.chambres.edit");
    Route::put("/dashboard/chambres/edit/{id}", [ChambreController::class, "update"])->name("admin.chambres.update");
    Route::delete("/dashboard/chambres/delete/{id}", [ChambreController::class, "destroy"])->name("admin.chambres.delete");

    // {{ Reservation }}

    Route::get("/dashboard/reservation/{id}/valide", [ReservationController::class, "update"])->name("admin.reservation.valide");

    // {{ Review }}

    // {{ Gallery }}
    Route::get("/dashboard/gallery/create", [GalleryController::class, "create"])->name("admin.gallery.create");
    Route::post("/dashboard/gallery/store", [GalleryController::class, "store"])->name("admin.gallery.store");
    Route::get("/dashboard/gallery/edit/{id}", [GalleryController::class, "edit"])->name("admin.gallery.edit");
    Route::put("/dashboard/gallery/edit/{id}", [GalleryController::class, "update"])->name("admin.gallery.update");
    Route::delete("/dashboard/gallery/delete/{id}", [GalleryController::class, "destroy"])->name("admin.gallery.delete");

    // {{ Staff }}
    Route::get("/dashboard/staff/create", [StaffController::class, "create"])->name("admin.staff.create");
    Route::post("/dashboard/staff/store", [StaffController::class, "store"])->name("admin.staff.store");
    Route::get("/dashboard/staff/edit/{id}", [StaffController::class, "edit"])->name("admin.staff.edit");
    Route::put("/dashboard/staff/edit/{id}", [StaffController::class, "update"])->name("admin.staff.update");
    Route::delete("/dashboard/staff/delete/{id}", [StaffController::class, "destroy"])->name("admin.staff.delete");

    // {{ Carousel }}
    Route::get("/dashboard/carousel/create", [CarouselController::class, "create"])->name("admin.carousel.create");
    Route::get("/dashboard/carousel/edit/{id}", [CarouselController::class, "edit"])->name("admin.carousel.edit");
    Route::put("/dashboard/carousel/edit/{id}", [CarouselController::class, "update"])->name("admin.carousel.update");

    // {{ Info Contact }}
    Route::get('/dashboard/info/edit', [InfoController::class, 'edit'])->name('admin.info.edit');
    Route::put('/dashboard/info/update', [InfoController::class, 'update'])->name('admin.info.update');

    // [[[[[[[[[[[[Complements composants]]]]]]]]]]]]

    Route::get("/style-guide", [FrontController::class, "styleGuide"]);
    Route::get("/buttons", [FrontController::class, "buttons"]);
    Route::get("/icons", [FrontController::class, "icons"]);



    // [[[[[[[[[[[[[[Breeze Authentification]]]]]]]]]]]]]]
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    require __DIR__ . '/auth.php';


    //affichage
    Route::get('/dashboard/mailbox', [ContactController::class, "index"])->middleware(["auth"])->name('mailbox.index');
    Route::get('/dashboard/mailbox/archives', [ContactController::class, "archives"])->middleware(["auth"])->name('mailbox.archive');
    Route::get('/dashboard/mailbox/{id}/delete', [ContactController::class, "destroy"])->middleware(["auth"])->name('mailbox.destroy');
    Route::get('/dashboard/mailbox/{id}/restore', [ContactController::class, "restore"])->middleware(["auth"])->name('mailbox.restore');
});
