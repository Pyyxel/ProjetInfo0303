<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected $table ="Matiere";
    public function formation(){
        return $this->belongsToMany(Formation::class,'FormationMatiere');
    }
}
