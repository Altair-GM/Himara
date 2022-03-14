<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

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
  public function blog()
  {
      return view("pages.elements.blog");
  }
  
}
