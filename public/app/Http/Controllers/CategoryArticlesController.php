<?php

namespace App\Http\Controllers;

use App\Models\CategoryArticles;
use Illuminate\Http\Request;

class CategoryArticlesController extends Controller
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
        $categories = CategoryArticles::all();
        return view('admin.articles.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.categories.create');
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
            'nom' => ['required', 'unique:category_articles,nom']
        ]);

        $category = new CategoryArticles();
        $category->nom = $request->nom;
        $category->save();
        return redirect()->route('category.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryArticles  $categoryArticles
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryArticles $categoryArticles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryArticles  $categoryArticles
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryArticles $categoryArticles)
    {
        return view('admin.articles.categories.edit', compact('categoryArticles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryArticles  $categoryArticles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryArticles $categoryArticles)
    {
        $request->validate([
            'nom' => ['required', 'unique:category_articles,nom,' . $categoryArticles->id]
        ]);


        $categoryArticles->nom = $request->nom;
        $categoryArticles->save();
        return redirect()->route('category.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryArticles  $categoryArticles
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryArticles $categoryArticles)
    {
        $categoryArticles->delete();
        return back();
    }
}
