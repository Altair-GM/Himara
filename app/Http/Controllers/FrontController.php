<?php

namespace App\Http\Controllers;


use App\Models\Articles;
use App\Models\Carousel;
use App\Models\CategoryArticles;
use App\Models\CategoryChambre;
use App\Models\CategoryImage;
use App\Models\Chambre;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Info;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Tag;
use App\Models\TagChambres;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $serviceAll = Service::all();
        $imageAll = Image::all();

        return view("pages.home", compact("serviceAll", "imageAll"));
    }

    // Page pr afficher tous les articles

    public function blog()
    {
        $blog = Articles::paginate(3);
        $tag = Tag::all();
        $categorieArticle = CategoryArticles::all();
        $blogLast = Articles::latest()->take(3)->get();
        return view('pages.blog', compact("blog", "tag", "categorieArticle", "blogLast"));
    }
    // Page qui permet de rechercher les articles en tapant dans l'input
    public function search(Request $request)
    {

        $data = $request->data;
        $blog = Articles::where('title', 'like', "%$data%")
            ->paginate(3);
        $tag = Tag::all();
        $categorieArticle = CategoryArticles::all();
        $blogLast = Articles::latest()->take(3)->get();
        return view('pages.blog', compact("blog", "tag", "categorieArticle", "blogLast"));
    }

    // Page pour afficher les articles d'un tag
    public function tagCategorie($id)
    {

        $tagiD = Tag::find($id);
        $blog = $tagiD->articles()->paginate(3);
        $tag = Tag::all();
        $categorieArticle = CategoryArticles::all();
        $blogLast = Articles::latest()->take(3)->get();
        return view('pages.blog', compact("blog", "tag", "categorieArticle", "blogLast"));
    }

    // Page qui permet d'afficher les articles par catégorie
    public function searchCategorie($id)
    {
        $categoryId = CategoryArticles::find($id);
        $blog = $categoryId->articles()->paginate(3);
        $tag = Tag::all();
        $categorieArticle = CategoryArticles::all();
        $blogLast = Articles::latest()->take(3)->get();
        return view('pages.blog', compact("blog", "tag", "categorieArticle", "blogLast"));
    }

    public function booking_form()
    {
        $categorieroom = CategoryChambre::all();
        $offers = Chambre::inRandomOrder()->take(3)->get();
        return view('pages.reservation', compact("categorieroom", 'offers'));
    }
    public function buttons()
    {
        return view('buttons');
    }
    public function contact()
    {
        $infos = Info::first();
        return view('pages.contact', compact("infos"));
    }
    public function event_details()
    {
        return view('event-details');
    }
    public function events()
    {
        return view('events');
    }

    // Page qui permet d'afficher la gallerie
    public function gallery()
    {
        $imageAll = Image::all();
        $categories = CategoryImage::all();
        return view('pages.gallery', compact("imageAll", "categories"));
    }

    public function icons()
    {
        return view('icons');
    }

    public function index()
    {

        $serviceAll = Service::all();
        $carousels = Carousel::all();
        $imageAll = Image::all();
        $category_chambres = CategoryChambre::all();
        $latestBlogs = Articles::latest()->take(3)->get();
        $rooms = Chambre::inRandomOrder()->take(3)->get();
        return view("pages.home", compact("serviceAll", "imageAll", 'rooms', 'latestBlogs', 'carousels', 'category_chambres'));
    }

    public function loading()
    {
        return view('loading');
    }
    public function pages()
    {
        return view('pages');
    }

    // Page qui permet de récupérer toutes les chambres
    public function roomlist()
    {
        $roomListAll = Chambre::paginate(3);
        $tagRoom = TagChambres::all();
        $categoryRoom = CategoryChambre::all();
        return view('pages.rooms', compact("roomListAll", "tagRoom", "categoryRoom"));
    }


    // Page pour afficher une seule chambre
    public function room($id)
    {
        $room = Chambre::find($id);
        $tagRoom = TagChambres::all();
        $categorieroom = CategoryChambre::all();
        return view('pages.room', compact("room", "tagRoom", "categorieroom"));
    }


    // Page qui permet de trier les chambres par tag
    public function tagRooms($id)
    {
        $roomListAll = Chambre::all();

        $tagRoomsiD = TagChambres::find($id);
        $roomListAll = $tagRoomsiD->rooms()->paginate(3);
        // dd(count($room));
        $tagRoom = TagChambres::all();
        // $categoryRoom = categorieRoom::all();
        // $roomsLast = Room::latest()->take(3)->get();

        $categoryRoom = CategoryChambre::all();

        // dd($projetTout);
        return view("pages.rooms", compact("tagRoom", "roomListAll", "categoryRoom"));
    }

    // Page qui permet d'afficher ts les membres du staff
    public function staff()
    {
        $team = Staff::all();
        $houseKeeper = Staff::where("fonction_id", 1)->first();
        return view('pages.team', compact("team", "houseKeeper"));
    }





    //  Page qui permet de rechercher les chambres par catégorie
    public function searchRoomCategorie($id)
    {

        $roomListAll = Chambre::where("category_chambre_id", $id)->paginate(3);
        $categoryRoom = CategoryChambre::all();
        // dd($categoryRoomArticle);

        $tagRoom = TagChambres::all();

        return view("pages.rooms", compact("roomListAll", "categoryRoom", "tagRoom"));
    }


    // PAge qui permet de rechercher les chambres via barre de recherche
    public function RoomSearch(Request $request)
    {
        $data = $request->data;
        $roomListAll = Chambre::where('nom', 'like', "%$data%")
            ->paginate(3);
        $categoryRoom = CategoryChambre::all();
        $tagRoom = TagChambres::all();


        return view("pages.rooms", compact("roomListAll", "categoryRoom", "tagRoom"));
    }


    // Page qui permet d'afficher un article en particulier
    public function blogPost($id)
    {
        $blog = Articles::find($id);
        // dd($projetTout);
        $comment = Comment::all();
        $categories = CategoryArticles::all();
        $tags = Tag::all();

        $latest = Articles::latest()->where('id', '!=', $id)->take(5)->get();

        return view("pages.blogpost", compact("blog", "comment", 'categories', 'tags', 'latest'));
    }
}
