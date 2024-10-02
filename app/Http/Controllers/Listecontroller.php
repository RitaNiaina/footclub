<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Joueur;
use App\Models\Equipe;
use App\Models\Titre;
class Listecontroller extends Controller
{
    public function listejoueur(){
    $liste_jou = DB::select('select `joueurs`.*, `equipes`.`nom_equi` from `joueurs` inner join `equipes` on `joueurs`.`id_equi` = `equipes`.`id_equi`');
    return view('Liste.joueur',compact('liste_jou'));
      
    }
 
    public function infojoue($id){
        try {
            $joueurs= Joueur::find($id);
        return response()->json([
            'joueurs' => $joueurs,
        ]);
        } catch (\Throwable $th) {
            $th;
        }
         
       }
}