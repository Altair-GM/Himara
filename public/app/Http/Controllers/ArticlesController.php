<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\CategoryArticles;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
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
        $articles = Articles::all();
        return view('admin.articles.index', compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tags = Tag::all();
        $category = CategoryArticles::all();
        return view('admin.articles.create', compact("tags", "category"));
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
            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|image',
            'category_article_id' => 'required|integer',
            'tag.*' => 'nullable|integer',
        ]);

        $image = Storage::disk('public')->put('images', $request->img);
        $article = new Articles();
        $article->img = $image;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->user_id = Auth::id();
        $article->category_article_id = $request->category_article_id;
        $article->save();

        if ($request->has('tag')) {

            foreach ($request->tag as $item) {
                Tag::find($item)->articles()->attach($article->id);
                $article->tags()->attach($item);
            }
        }
        return redirect()->route('article.index')->with(['success'=>'Article créé avec succès !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit($articles)
    {
        $tags = Tag::all();
        $category = CategoryArticles::all();{{  }}
        $articles = Articles::find($articles);
        // dd($articles);
        return view('admin.articles.edit', compact("tags", "category", "articles"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'somtimes|image',
            'category_article_id' => 'required|integer',
            'tag.*' => 'nullable|integer',

        ]);
        $article = Articles::find($article);
        if ($request->hasFile('image')) {
            // if (Storage::disk('public')->exists($article->img)) {
            //     Storage::disk('public')->delete($article->img);
            // }
            $image = Storage::disk('public')->put('images', $request->img);
            $article->img = $image;
        }
        $article->title = $request->title;
        $article->description = $request->description;
        $article->user_id = Auth::id();
        $article->category_article_id = $request->category_article_id;
        $article->save();
        if ($request->has('tag')) {

            $article->tags()->detach();

            foreach ($request->tag as $item) {
                Tag::find($item)->articles()->attach($article->id);
                $article->tags()->attach($item);
            }
        }
        return redirect()->route('admin.article')->with(['success'=>'Article édité avec succès !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy( $articles)
    {
        $article = Articles::find($articles);
        // if (Storage::disk('public')->exists($article->img)) {
        //     Storage::disk('public')->delete($article->img);
        // }
        $article->delete();
        return back();
    }
}
