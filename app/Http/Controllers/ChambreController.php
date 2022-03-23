<?php

namespace App\Http\Controllers;

use App\Models\CategoryChambre;
use App\Models\Chambre;
use App\Models\TagChambres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chambres = Chambre::all();
        return view('admin.rooms.index', compact("chambres"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tags = TagChambres::all();
        $category = CategoryChambre::all();
        return view('admin.rooms.create', compact("tags", "category"));
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
            'titre' => 'required|string',
            'texte' => 'required|string',
            'image' => 'required|image',
            'categorie' => 'required|integer',
            'tag.*' => 'nullable|integer',
        ]);

        $image = Storage::disk('public')->put('', $request->image);
        $article = new Chambre();
        $article->img = $image;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->user_id = Auth::id();
        $article->category_article_id = $request->categorie;
        $article->save();

        if ($request->has('tag')) {

            foreach ($request->tag as $item) {
                TagChambres::find($item)->chambres()->attach($article->id);
                $article->tags()->attach($item);
            }
        }
        return redirect()->route('admin.chambres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambre  $chambres
     * @return \Illuminate\Http\Response
     */
    public function show(Chambre $chambres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chambre  $chambres
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambre $chambres)
    {
        $tags = TagChambres::all();
        $category = CategoryChambre::all();
        return view('admin.rooms.edit', compact("tags", "category", "chambres"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chambre  $chambres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chambre $article)
    {
        $request->validate([
            'titre' => 'required|string',
            'texte' => 'required|string',
            'image' => 'somtimes|image',
            'categorie' => 'required|integer',
            'tag.*' => 'nullable|integer',

        ]);
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($article->img)) {
                Storage::disk('public')->delete($article->img);
            }
            $image = Storage::disk('public')->put('', $request->image);
            $article->img = $image;
        }
        $article->title = $request->title;
        $article->description = $request->description;
        $article->user_id = Auth::id();
        $article->category_article_id = $request->categorie;
        $article->save();
        if ($request->has('tag')) {

            $article->tags()->detach();

            foreach ($request->tag as $item) {
                TagChambres::find($item)->chambres()->attach($article->id);
                $article->tags()->attach($item);
            }
        }
        return redirect()->route('admin.chambres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambre  $chambres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chambre $chambres)
    {
        $chambres->delete();
        return back();
    }
}
