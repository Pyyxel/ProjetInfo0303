<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GroupeController extends Controller
{
    public function listeEleve($idGroupe){
        // DB::insert('insert into groupe_eleves(groupe_id,eleve_id) values (?,?)', [$idGroupe,'3']);

        $eleves = \App\Models\Groupe::find($idGroupe)->eleve;
        



        return view('groupe', ['eleves' => $eleves]);
    }
}
