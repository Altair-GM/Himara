<?php

namespace App\Http\Controllers;

use App\Models\CategoryImage;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Image::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = CategoryImage::all();
        return view('admin.gallery.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nom' => ['required', 'string'],
            'category_image_id' => ['required', 'exists:category_images,id'],
            'url' => ['required', 'image']
        ]);
        $gallery = new Image();
        if ($request->hasFile('url')) {

            $image = Storage::disk('public')->put('images/', $request->url);
            $gallery->url = $image;
        }
        $gallery->nom = $request->nom;
        $gallery->category_image_id = $request->category_image_id;
        $gallery->save();
        return redirect()->route('admin.gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($gallery)
    {
        $categories = CategoryImage::all();
        // dd($gallery);
        $gallery = Image::find($gallery);
        return view('admin.gallery.edit', compact('categories', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $gallery)
    {
        $request->validate([
            'nom' => ['required', 'string'],
            'category_image_id' => ['required', 'exists:category_images,id'],
            'url' => ['required', 'image']
        ]);

        if ($request->hasFile('url')) {
            // if (Storage::disk('public')->exists($gallery->url)) {
            //     Storage::disk('public')->delete($gallery->url);
            // }
            $image = Storage::disk('public')->put('images/', $request->url);
            $gallery->url = $image;
        }
        $gallery->nom = $request->nom;
        $gallery->category_image_id = $request->category_image_id;
        $gallery->save();
        return redirect()->route('admin.gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Image::find($id);
        // if (Storage::disk('public')->exists($gallery->url)) {
        //     Storage::disk('public')->delete($gallery->url);
        // }
        $gallery->delete();
        return back();
    }
}
