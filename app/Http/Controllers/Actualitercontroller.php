<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Actualiter;
class Actualitercontroller extends Controller
{
    public function listeactu(){
        $actualiters = Actualiter::all();
        return view('actualiter.actu',compact('actualiters'));
    }
    public function ajouteactu(){
        return view('actualiter.actu');
    }
    
    public function ajout_actu(Request $request){
        $images= time().'.'.$request->photo_actu->extension();
        $request->photo_actu->move(public_path('actue'),$images);

            $actualite= new Actualiter();
            $actualite->titre_actu = $request->titre_actu;
            $actualite->photo_actu = $images;
            $actualite->contenu_actu = $request->contenu_actu;
            $actualite->save();
            return redirect('/actualite')->with('success','actualiter a bien été ajouté');
       
    }
    public function modeactu(Request $request){
        $images= time().'.'.$request->photo_actu->extension();
        $request->photo_actu->move(public_path('actue'),$images);
        $actualite= Actualiter::find($request->id_actu);
        $actualite->titre_actu = $request->titre_actu;
        $actualite->photo_actu = $images;
        $actualite->contenu_actu = $request->contenu_actu;
        $actualite->update();
        return redirect('/actualite')->with('success','actualiter a bien été modifier');
    }
    public function modifieractu($id){
        $actualiters=Actualiter::find($id);
        return response()->json([
            'actualite' => $actualiters,
        ]);
    }

    public function modifact($id){

        try {
            $actualiters = Actualiter::find($id);
        return response()->json([
            'status' => 200,
            'actualiters' => $actualiters,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function suprimactu($id_actu){
        Actualiter::find($id_actu)->delete();
        return response()->json();
        
      }
    
}
