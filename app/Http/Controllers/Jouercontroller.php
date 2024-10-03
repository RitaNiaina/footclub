<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joueur;
use App\Models\Titre;
use App\Models\Equipe;
class Jouercontroller extends Controller
{
    public function listejoeur(){
        
        $joueurs = Joueur::all();
        return view('joueur.jou',compact('joueurs'));
    }
    public function ajoutjou(){
        return view('joueur.jou');
    }
    
    public function ajout_joeur(Request $request){
        $request->validate([
            'datenaiss_jous' => [
                'required',
                'date',
                'before_or_equal:' . now()->subYears(12)->format('Y-m-d'),
            ],
        ]);
        $images= time().'.'.$request->photo_jou->extension();
        $request->photo_jou->move(public_path('joueur'),$images);
        
        
        try {
        $joeur= new Joueur();
        $joeur->id_jou = $request->id_jou;
        $joeur->id_tit = $request->id_tit;
        $joeur->id_equi = $request->id_equi;
        $joeur->nom_jou = $request->nom_jou;
        $joeur->prenom_jou = $request->prenom_jou;
        $joeur->datenaiss_jou = $request->datenaiss_jou;
        $joeur->age_jou = $request->age_jou;
        $joeur->nationalite_jou = $request->nationalite_jou;
        $joeur->adress_jou = $request->adress_jou;
        $joeur->tel_jou = $request->tel_jou;
        $joeur->email_jou = $request->email_jou;
        $joeur->sexe_jou = $request->sexe_jou;
        $joeur->tail_jou = $request->tail_jou;
        $joeur->pied_jou = $request->pied_jou;
        $joeur->photo_jou = $images;
        $joeur->post_jou = $request->post_jou;
        $joeur->num_jou = $request->num_jou;
        $joeur->save();
        return redirect('/joueures')->with('success','joueur a bien été ajouté');
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function modejou(Request $request, Joueur $joeur){
        $images= time().'.'.$request->photo_jou->extension();
        $request->photo_jou->move(public_path('joueur'),$images);
        $joeur= Joueur::find($request->id_jou);
        $joeur->id_tit = $request->id_tit;
        $joeur->id_equi = $request->id_equi;
        $joeur->nom_jou = $request->nom_jou;
        $joeur->prenom_jou = $request->prenom_jou;
        $joeur->datenaiss_jou = $request->datenaiss_jou;
        $joeur->age_jou = $request->age_jou;
        $joeur->nationalite_jou = $request->nationalite_jou;
        $joeur->adress_jou = $request->adress_jou;
        $joeur->tel_jou = $request->tel_jou;
        $joeur->email_jou = $request->email_jou;
        $joeur->sexe_jou = $request->sexe_jou;
        $joeur->tail_jou = $request->tail_jou;
        $joeur->pied_jou = $request->pied_jou;
        $joeur->photo_jou = $images;
        $joeur->post_jou = $request->post_jou;
        $joeur->num_jou = $request->num_jou;
        $joeur->update();
        return redirect('/joueures')->with('success','joueur a bien été modifier');
    }
    public function modifierjou($id){
        $joueurs=Joueur::find($id);
        return response()->json([
            'joeur' => $joueurs,
        ]);
    }

    public function modifjoueur($id){

        try {
            $joueurs = Joueur::find($id);
        return response()->json([
            'status' => 200,
            'joueurs' => $joueurs,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function suprimjou($id_jou){
        Joueur::find($id_jou)->delete();
        return response()->json();
      }
}
