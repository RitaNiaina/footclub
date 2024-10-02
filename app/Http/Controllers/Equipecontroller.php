<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Equipe;
class Equipecontroller extends Controller
{
    public function listeequipe(){
        $equipes = Equipe::all();
        return view('equipe.liste',compact('equipes'));
    }
    public function ajoutequip(){
        return view('equipe.liste');
    }
    
    public function ajout_equipe(Request $request){
        $request->validate([
            'nom_equi'=>'required',
        ]);
        $equipe= new Equipe();
        $equipe->nom_equi = $request->nom_equi;
        $equipe->save();

        return redirect('/equipe')->with('success','equipe a bien été ajouté');
    }
    
    

    public function modequipe(Request $request){
        $request->validate([
            'nom_equi'=>'required',
        ]);
        $equipe= Equipe::find($request->id_equi);
        $equipe->nom_equi = $request->nom_equi;
        $equipe->update();
        return redirect('/equipe')->with('success','equipe a bien été ajouté');
    }

    public function superequip($id_equi){
      Equipe::find($id_equi)->delete();
      return response()->json();
    }
    public function modifierequip($id){
        $equipes=Equipe::find($id);
        return response()->json([
            'equipe' => $equipes,
        ]);
    }

    public function modif($id){

        try {
            $equipes = Equipe::find($id);
        return response()->json([
            'status' => 200,
            'equipes' => $equipes,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    
}
