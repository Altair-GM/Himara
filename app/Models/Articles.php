<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_articles');
    }

    public function category()
    {
        // Car un article appartient à une seule catégorie
        return $this->belongsTo(CategoryArticle::class, 'category_article_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'article_id');
    }

    
}
