<?php

namespace App\Http\Controllers;
use App\Models\Titre;
use Illuminate\Http\Request;

class Titrecontroller extends Controller
{
    public function listetitre(){
        $titres = Titre::all();
        return view('titre.titreli',compact('titres'));
    }
    public function ajoutitre(){
        return view('titre.titreli');
    }
    
    public function ajout_titre(Request $request){
        $request->validate([
            'nom_tit'=>'required',
            'saison_tit'=>'required',
        ]);
        $titre= new Titre();
        $titre->nom_tit = $request->nom_tit;
        $titre->saison_tit = $request->saison_tit;
        $titre->save();

        return redirect('/titre')->with('success','titre a bien été ajouté');
    }

    public function modetitre(Request $request){
        $request->validate([
            'nom_tit'=>'required',
            'saison_tit'=>'required',
        ]);
        $titre= Titre::find($request->id_tit);
        $titre->nom_tit = $request->nom_tit;
        $titre->saison_tit = $request->saison_tit;
        $titre->update();
        return redirect('/titre')->with('success','titre a bien été modifier');
    }

    public function modifietit($id){
        $titres=Titre::find($id);
        return response()->json([
            'titre' => $titres,
        ]);
    }

    public function modiftit($id){

        try {
            $titres = Titre::find($id);
        return response()->json([
            'status' => 200,
            'titres' => $titres,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function suprimtit($id_tit){
        Titre::find($id_tit)->delete();
        return response()->json();
      }
}
