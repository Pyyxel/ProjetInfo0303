<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table="cours";
    protected $dates = [
        'date_cours',
    ];
    public function groupe(){
        return $this->belongsToMany(Groupe::class,'coursgroupe');
    }

    public function eleve(){
        return $this->belongsToMany(Eleve::class, 'eleve_cours');
    }

    
}
