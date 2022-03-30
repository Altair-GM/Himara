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
    public function __construct()
    {
        $this->middleware('editor');
    }
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
            'nom' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'sofa' => 'required',
            'lit' => 'required',
            'max' => 'required',
            'category_chambre_id' => 'required|integer',
            'tag.*' => 'nullable|integer',
        ]);

        $image = Storage::disk('public')->put('', $request->image);
        $chambre = new Chambre();
        $chambre->image = $image;
        $chambre->nom = $request->nom;
        $chambre->prix = $request->prix;
        $chambre->max = $request->max;
        $chambre->sofa = $request->sofa;
        $chambre->lit = $request->lit;
        $chambre->description = $request->description;
        $chambre->category_chambre_id = $request->category_chambre_id;
        $chambre->save();

        if ($request->has('tag')) {

            foreach ($request->tag as $item) {
                TagChambres::find($item)->rooms()->attach($chambre->id);
                $chambre->tags()->attach($item);
            }
        }
        return redirect()->route('admin.chambres');
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
    public function edit($chambre)
    {
        $chambre = Chambre::find($chambre);
        $tags = TagChambres::all();
        $category = CategoryChambre::all();
        return view('admin.rooms.edit', compact("tags", "category", "chambre"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chambre  $chambres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $chambre)
    {
        $request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'sofa' => 'required',
            'lit' => 'required',
            'max' => 'required',
            'category_chambre_id' => 'required|integer',
            'tag.*' => 'nullable|integer',
        ]);

        $chambre = Chambre::find($chambre);
        if ($request->hasFile('image')) {
            // if (Storage::disk('public')->exists($chambre->image)) {
            //     Storage::disk('public')->delete($chambre->image);
            // }
            $image = Storage::disk('public')->put('', $request->image);
            $chambre->image = $image;
        }
        $chambre->nom = $request->nom;
        $chambre->prix = $request->prix;
        $chambre->max = $request->max;
        $chambre->sofa = $request->sofa;
        $chambre->lit = $request->lit;
        $chambre->description = $request->description;
        $chambre->category_chambre_id = $request->category_chambre_id;
        $chambre->save();
        if ($request->has('tag')) {

            $chambre->tags()->detach();

            foreach ($request->tag as $item) {
                TagChambres::find($item)->rooms()->attach($chambre->id);
                $chambre->tags()->attach($item);
            }
        }
        return redirect()->route('admin.chambres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambre  $chambres
     * @return \Illuminate\Http\Response
     */
    public function destroy($chambre)
    {
        $chambre = Chambre::find($chambre);
        $chambre->delete();
        return back();
    }
}
