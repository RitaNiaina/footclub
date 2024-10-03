<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matcher;
use Illuminate\Support\Facades\DB;
class Matchercontroller extends Controller
{
    public function listematch(){
        $matches =DB::table('matchers')
        // ->where('matchers.statue',1)
        ->get();
        return view('matchee.matc',compact('matches'));
    }

    public function ajoutmatch(){
        return view('matchee.matc');
    }
    
    public function ajout_matche(Request $request){
        $matche= new Matcher();
        $matche->id_club = $request->id_club;
        $matche->id_equi = $request->id_equi;
        $matche->date_mat = $request->date_mat;
        $matche->heure_mat = $request->heure_mat;
        $matche->caract_mat = $request->caract_mat;
        $matche->scor_mmfc = $request->scor_mmfc;
        $matche->scor_mat = $request->scor_mat;
        $matche->carte_rouge = $request->carte_rouge;
        $matche->carte_jaune = $request->carte_jaune;
        $matche->id_champ = $request->id_champ;
        $matche->lieu_match = $request->lieu_match;
        $matche->latitude = $request->latitude;
        $matche->longitude = $request->longitude;
        $matche->save();

        return redirect('/matches')->with('success','Calendrier a bien été ajouté');
    }
    public function modematch(Request $request, Matcher $matche){
        
        $statue= "2";
        $matche= Matcher::find($request->id_mat);
        $matche->statue = $statue;
        $matche->scor_mmfc = $request->scor_mmfc;
        $matche->scor_mat = $request->scor_mat;
        $matche->carte_rouge = $request->carte_rouge;
        $matche->carte_jaune = $request->carte_jaune;
        $matche->id_champ = $request->id_champ;
        $matche->update();
        return redirect('/matches')->with('success','Resultat a bien été ajouter');
    }
    public function modifiermatche($id){
        $matches=Matcher::find($id);
        return response()->json([
            'matche' => $matches,
        ]);
    }

    public function modifmatch($id){

        try {
            $matches = Matcher::find($id);
        return response()->json([
            'status' => 200,
            'matches' => $matches,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function suprimmatch($id_mat){
        Matcher::find($id_mat)->delete();
        return response()->json();
      }
}
