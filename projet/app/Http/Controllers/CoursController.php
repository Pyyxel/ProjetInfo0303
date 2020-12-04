<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller
{
    public function coursListe($idGroupe){
        // DB::insert('insert into cours(cours,date_cours) values (?,?)', ['INFO0303',$date]);
        // DB::insert('insert into cours_groupes(cours_id,groupe_id) values (?,?)', ['3',$idGroupe]);
        
        $cours = \App\Models\Groupe::find($idGroupe)->cours;
        return \View::make("cours")->with("cours", $cours);
        
    }


    public function eleveListe($idCours){
        // dd(\App\Models\Eleve::presence($idCours));
        // DB::insert('insert into eleves(nom,prenom,numero_etudiant) values (?,?,?)', ['TEST3','test3','33333333']);
        // DB::insert('insert into eleve_cours(eleve_id,cours_id) values (?,?)', ['3',$idCours]);
        $eleves = \App\Models\Cours::find($idCours)->eleve;
        $date = \App\Models\Cours::find($idCours)->date_cours;
       
        return view('absence', ['eleves' => $eleves,
                               'idCours'=> $idCours,
                               'date' => $date ]);
    }

    public function eleveAbsent($idEleve,$idCours){
        $eleves = \App\Models\Cours::find($idCours)->eleve;
        $date=new \dateTime(date('d-m-Y h:i:s a', time()));
        DB::table('eleve_cours')
              ->where('eleve_id',$idEleve)
              ->update(['presence' => 'Absence non justifiée']);
        
        
        return view('absence', ['eleves' => $eleves,
                    'idCours'=> $idCours,
                    'date' => $date]);
    }

    public function eleveAJ($idEleve,$idCours){
        $eleves = \App\Models\Cours::find($idCours)->eleve;
        $date=new \dateTime(date('d-m-Y h:i:s a', time()));
        DB::table('eleve_cours')
              ->where('eleve_id',$idEleve)
              ->update(['presence' => 'Absence justifiée']);
        
        
        return view('absence', ['eleves' => $eleves,
                    'idCours'=> $idCours,
                    'date' => $date]);
    }

    public function elevePresent($idEleve,$idCours){
       
        $eleves = \App\Models\Cours::find($idCours)->eleve;
        $date=new \dateTime(date('d-m-Y h:i:s a', time()));

        DB::table('eleve_cours')
              ->where('eleve_id',$idEleve)
              ->update(['presence' => 'Present']);
        
        
        return view('absence', ['eleves' => $eleves,
                    'idCours'=> $idCours,
                    'date' => $date]);

    }
}
