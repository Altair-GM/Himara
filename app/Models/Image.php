<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Faire Gaff
    use HasFactory;
    public function category(){
        return $this->belongsTo(CategoryImage::class, 'category_image_id');
    }
}
