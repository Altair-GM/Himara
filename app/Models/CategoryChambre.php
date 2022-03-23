<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryChambre extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->hasMany(Chambre::class, 'category_chambre_id');
    }
}
