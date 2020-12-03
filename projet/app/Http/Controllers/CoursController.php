<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller
{
    public function coursListe($idGroupe){
        $date=new \dateTime(date('d-m-Y h:i:s a', time()));
        // DB::insert('insert into cours(cours,date_cours) values (?,?)', ['INFO0305',$date]);
        // DB::insert('insert into cours_groupes(cours_id,groupe_id) values (?,?)', ['3',$idGroupe]);

        $cours = \App\Models\Groupe::find($idGroupe)->cours;
        return \View::make("cours")->with("cours", $cours);

        
    }
}
