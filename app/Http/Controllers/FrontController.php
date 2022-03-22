<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Carousel;
use App\Models\CategoryArticles;
use App\Models\TagArticle;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index(){
        $carousels = Carousel::all();
        return view('pages.home');
    }

  public function rooms()
  {
      return view("pages.rooms");
  }
  public function team()
  {
      return view("pages.team");
  }
  public function gallery()
  {
      return view("pages.gallery");
  }
  public function contact()
  {
      return view("pages.contact");
  }
  public function styleGuide()
  {
      return view("pages.elements.styleGuide");
  }
  public function buttons()
  {
      return view("pages.elements.buttons");
  }
  public function icons()
  {
      return view("pages.elements.icons");
  }
  //   Blog Controller
  public function blog()
 
  {
      $blog = Articles::all();
      $tag = TagArticle::all();
      $categoryArticle = CategoryArticles::all();
      $blogLast = Articles::latest()->take(3)->get();
      return view("pages.elements.blog",compact("blog","tag","categoryArticle","blogLast"));
  }
  

}
