<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public  function  store(Request  $request, $id)
    {

        $table = new  Comment();
        if (Auth::check()) {
            $request->validate([
                'commentaire' => ['required'],
            ]);
            $table->name = Auth::user()->name;
            $table->email = Auth::user()->email;
        } else {
            $request->validate([
                'name' => ['required'],
                'email' => ['required'],
            ]);
            $table->name = $request->name;
            $table->email = $request->email;
            $table->website = $request->website;
        }
        $table->validate = false;
        $table->article_id = $id;
        $table->commentaire = $request->commentaire;
        $table->photoProfil = "images/blog/blog-post1.jpg";

        $table->save();
        return  redirect()->back()->with(['success'=>'Commentaire envoyé avec succès ! Veuillez attendre sa validation.']);
    }

    // delete
    public function destroy($id)
    {
        $destroy = Comment::find($id);
        $destroy->delete();
        return  redirect()->back()->with(['success'=>'Commentaire supprimé avec succès !']);
    }
    public function update($id)
    {
        $comment = Comment::find($id);
        $comment->validate = true;
        $comment->save();
        return redirect()->back()->with(['success'=>'Commentaire validé avec succès !']);
    }

    public function index()
    {
        $comments = Comment::all();
        return view("admin.comments.index", compact("comments"));
    }
}
