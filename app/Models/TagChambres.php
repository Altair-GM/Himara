<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagChambres extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->belongsToMany(Chambre::class, 'chambre_tags', 'tag_chambre_id');
    }
}
