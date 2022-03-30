<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryArticles extends Model
{
    use HasFactory;
    public function articles(){
        return $this->hasMany(Articles::class, 'category_article_id');
    }
}
