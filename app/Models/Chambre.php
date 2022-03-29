<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    public function services()
    {
        return $this->belongsToMany(ServiceRoom::class, 'chambre_services');
    }

    public function tags()
    {

        return $this->belongsToMany(TagChambres::class, 'chambre_tags', 'chambre_id','tag_chambre_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryChambre::class, 'category_chambre_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class,'chambre_id');
    }
}
