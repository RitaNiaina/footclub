<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Champion;
class Championcontroller extends Controller
{
    public function listechamp(){
        $champions = Champion::all();
        return view('champion.champ',compact('champions'));
    }
    public function ajoutchamp(){
        return view('champion.champ');
    }
    
    public function ajout_champ(Request $request){
        $request->validate([
            'nom_champ'=>'required',
        ]);
        $champion= new Champion();
        $champion->nom_champ = $request->nom_champ;
        $champion->save();
        return redirect('/champion')->with('success','champion a bien été ajouté');
        
    }

    public function modechamp(Request $request){
        $request->validate([
            'nom_champ'=>'required',
        ]);
        $champion= Champion::find($request->id_champ);
        $champion->nom_champ = $request->nom_champ;
        $champion->update();
        return redirect('/champion')->with('success','champion a bien été modifier');
    }
    public function modifierchamp($id){
        $champions=Champion::find($id);
        return response()->json([
            'champion' => $champions,
        ]);
    }

    public function modifchamp($id){

        try {
            $champions = Champion::find($id);
        return response()->json([
            'status' => 200,
            'champions' => $champions,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }

    public function suprimchamp($id_champ){
        Champion::find($id_champ)->delete();
        return response()->json();
      }
}
