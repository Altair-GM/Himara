<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Staff extends Model
{
    use HasFactory;

    public function fonction(){
        return $this->belongsTo(Fonction::class, 'fonction_id');
    }
}
