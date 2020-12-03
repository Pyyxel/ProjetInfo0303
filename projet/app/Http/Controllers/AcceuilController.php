<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AcceuilController extends Controller
{
    public function acceuilProf(){
        // DB::insert('insert into groupes (groupe) values (?)', ['groupe3']);
        // DB::insert('insert into groupe_users (groupe_id,user_id) values (?,?)', [3,2]);

        if(isset(Auth::user()->id)){
            if(Auth::user()->role == 0){
                $user=Auth::user();
                $groupes=$user->groupes;
                
            }

        }else{
            return redirect()->route('login');
        }
        
        return \View::make("acceuil")->with("groupes", $groupes);
    }
}
