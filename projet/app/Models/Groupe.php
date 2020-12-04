<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $table="groupes";

    public function matieres(){
        return $this->belongsToMany(Matiere::class,'matieregroupe');
    }
    public function cours(){
        return $this->belongsToMany(Cours::class,'cours_groupes');
    }

    public function eleve(){
        return $this->belongsToMany(Eleve::class,'groupe_eleves');
    }

    public function user(){
        return $this->belongsToMany(User::class,'groupe_users');
    }
}
