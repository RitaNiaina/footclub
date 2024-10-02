<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matcher;
use App\Models\Club;
use App\Models\Equipe;
use App\Models\Champion;
use Illuminate\Support\Facades\DB;
class calendrecontroller extends Controller
{
    public function calendrier(){
        $calendre = DB::table('matchers')
            ->join('equipes', 'matchers.id_equi','=' ,'equipes.id_equi')
            ->join('clubs', 'matchers.id_club','=','clubs.id_club')
            ->select('equipes.nom_equi','clubs.nom_club','clubs.logo_club','matchers.caract_mat','matchers.date_mat','matchers.heure_mat')
            ->where('matchers.statue', 1)
            ->get();
        return view('Calendrier.calendar',compact('calendre'));
          
        }
     
}
