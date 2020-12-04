<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Eleve extends Model
{
    use HasFactory;
    protected $table="eleves";

    public function groupe(){
        return $this->belongsToMany(Groupe::class,'groupe_eleves');
    }

    public function cours(){
        return $this->belongsToMany(Cours::class,'eleve_cours');
    }

    public static function presence($idCours){
        return  DB::select('select presence from eleve_cours where cours_id='.$idCours);

    }
    
}
