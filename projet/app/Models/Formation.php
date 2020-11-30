<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table ="Formation";

    public function matiere(){
        return $this->belongsToMany(Matiere::class,'FormationMatiere');
    }
}
