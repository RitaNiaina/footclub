<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matcher;
use App\Models\Club;
use App\Models\Equipe;
use App\Models\Champion;
use Illuminate\Support\Facades\DB;
class resultatcontroller extends Controller
{
    public function resu(){
        $result = DB::table('matchers')
            ->join('equipes', 'matchers.id_equi','=' ,'equipes.id_equi')
            ->join('clubs', 'matchers.id_club','=','clubs.id_club')
            ->select('equipes.nom_equi','clubs.nom_club','clubs.logo_club','matchers.caract_mat','matchers.date_mat','matchers.scor_mmfc','matchers.scor_mat','matchers.carte_rouge','matchers.carte_jaune')
            ->where('matchers.statue', 2)
            ->get();
        return view('Resultat.res',compact('result'));
          
        }
     
}
