<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;

class Sponsorcontroller extends Controller
{
    public function listespons(){
        $sponsors = Sponsor::all();
        return view('sponsor.spons',compact('sponsors'));
    }
    public function ajoutspons(){
        return view('sponsor.spons');
    }
    
    public function ajout_spons(Request $request){
        try {

            $image= time().'.'.$request->logo_spons->extension();
            $request->logo_spons->move(public_path('sponsor'),$image);
            $sponsor= new Sponsor();
            $sponsor->nom_spons = $request->nom_spons;
            $sponsor->debut_spons = $request->debut_spons;
            $sponsor->fin_spons = $request->fin_spons;
            $sponsor->logo_spons = $image;
            $sponsor->save();
            return redirect('/sponsore')->with('success','sponsor a bien été ajouté');
        } catch (\Throwable $th) {
            echo($th);
        }
       
    }
    public function modespons(Request $request, Sponsor $sponsor){
       
        try {
            $image= time().'.'.$request->logo_spons->extension();
            $request->logo_spons->move(public_path('sponsor'),$image);
            $sponsor= Sponsor::find($request->id_spons);
            $sponsor->nom_spons = $request->nom_spons;
            $sponsor->debut_spons = $request->debut_spons;
            $sponsor->fin_spons = $request->fin_spons;
            $sponsor->logo_spons = $image;
            $sponsor->update();
            
            return redirect('/sponsore')->with('success','sponsor a bien été modifier');

        
        } catch (\Throwable $th) {
            echo($th);
        }
        
        
    }
    
      public function modifierspons($id){
          $sponsors=Sponsor::find($id);
          return response()->json([
              'sponsor' => $sponsors,
          ]);
 
        }
        public function modifspons($id){

            try {
                $sponsors = Sponsor::find($id);
            return response()->json([
                'status' => 200,
                'sponsors' => $sponsors,
            ]);
            } catch (\Throwable $th) {
                echo $th;
            }
            
        }
        public function suprimspons($id_spons){
            Sponsor::find($id_spons)->delete();
            return response()->json();
          }
}
