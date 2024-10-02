<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Club;
class Clubcontroller extends Controller
{
    public function listeclub(){
        $clubs = Club::all();
        return view('club.clube',compact('clubs'));
    }
    public function ajoutclub(){
        return view('club.clube');
    }
    
    public function ajout_club(Request $request){
        $images= time().'.'.$request->logo_club->extension();
        $request->logo_club->move(public_path('clube'),$images);
        $club= new Club();
        $club->id_club = $request->id_club;
        $club->nom_club = $request->nom_club;
        $club->logo_club = $images;
        $club->save();
        return redirect('/clubes')->with('success','club a bien été ajouté');
    }
    public function modeclub(Request $request, Club $club){
        $images= time().'.'.$request->logo_club->extension();
        $request->logo_club->move(public_path('clube'),$images);
        $club= Club::find($request->id_club);
        $club->nom_club = $request->nom_club;
        $club->logo_club = $images;
        $club->update();
        return redirect('/clubes')->with('success','club a bien été modifier');
    }
    public function modifierclub($id){
        $clubs=Club::find($id);
        return response()->json([
            'club' => $clubs,
        ]);
    }

    public function modifclub($id){

        try {
            $clubs = Club::find($id);
        return response()->json([
            'status' => 200,
            'clubs' => $clubs,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function suprimclub($id_club){
        Club::find($id_club)->delete();
        return response()->json();
      }
}
