<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
use App\Models\Equipe;
class Membrecontroller extends Controller
{
    public function listemembre(){
        $membres = Membre::all();
        return view('Membre.bureau',compact('membres'));
    }
    public function ajoutmem(){
        return view('Membre.bureau');
    }
    
    public function ajout_membre(Request $request){
        $images= time().'.'.$request->photo_mem->extension();
        $request->photo_mem->move(public_path('Bureau'),$images);
        
        try {
        $membre= new Membre();
        $membre->id_mem = $request->id_mem;
        $membre->id_equi = $request->id_equi;
        $membre->nom_mem = $request->nom_mem;
        $membre->prenom_mem = $request->prenom_mem;
        $membre->datenaiss_mem = $request->datenaiss_mem;
        $membre->nationalite_mem = $request->nationalite_mem;
        $membre->adress_mem = $request->adress_mem;
        $membre->tel_mem = $request->tel_mem;
        $membre->email_mem = $request->email_mem;
        $membre->sexe_mem = $request->sexe_mem;
        $membre->photo_mem = $images;
        $membre->post_mem = $request->post_mem;
        $membre->save();
        return redirect('/bureaux')->with('success','membre a bien été ajouté');
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function modemem(Request $request, Membre $membre){
        $images= time().'.'.$request->photo_mem->extension();
        $request->photo_mem->move(public_path('Bureau'),$images);
        $membre= Membre::find($request->id_mem);
        $membre->id_equi = $request->id_equi;
        $membre->nom_mem = $request->nom_mem;
        $membre->prenom_mem = $request->prenom_mem;
        $membre->datenaiss_mem = $request->datenaiss_mem;
        $membre->nationalite_mem = $request->nationalite_mem;
        $membre->adress_mem = $request->adress_mem;
        $membre->tel_mem = $request->tel_mem;
        $membre->email_mem = $request->email_mem;
        $membre->sexe_mem = $request->sexe_mem;
        $membre->photo_mem = $images;
        $membre->post_mem = $request->post_mem;
        $membre->update();
        return redirect('/bureaux')->with('success','membre a bien été modifier');
    }
    public function modifiermem($id){
        $membres=Membre::find($id);
        return response()->json([
            'membre' => $membres,
        ]);
    }

    public function modifmem($id){

        try {
            $membres = Membre::find($id);
        return response()->json([
            'status' => 200,
            'membres' => $membres,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function suprimem($id_mem){
        Membre::find($id_mem)->delete();
        return response()->json();
      }
}
