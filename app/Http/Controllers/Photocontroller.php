<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Actualiter;
class Photocontroller extends Controller
{
    public function listephoto(){
        
        $photos = Photos::all();
        return view('photo.phot',compact('photos'));
    }
    public function ajoutphoto(){
        return view('photo.phot');
    }
    
    public function ajout_photo(Request $request){
        $images= time().'.'.$request->url_photo->extension();
        $request->url_photo->move(public_path('photoe'),$images);
        
        try {
        $photo= new Photos();
        $photo->url_photo = $images;
        $photo->description_photo = $request->description_photo;
        $photo->save();
        return redirect('/phots')->with('success','photo a bien été ajouté');
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }

    public function modephoto(Request $request, Photos $photo){
        $images= time().'.'.$request->url_photo->extension();
        $request->url_photo->move(public_path('photoe'),$images);
        $photo= Photos::find($request->id_photo);
        $photo->url_photo = $images;
        $photo->description_photo = $request->description_photo;
        $photo->update();
        return redirect('/phots')->with('success','photo a bien été modifier');
    }
    public function modifierphoto($id){
        $photos=Photos::find($id);
        return response()->json([
            'photo' => $photos,
        ]);
    }

    public function modifphoto($id){

        try {
            $photos = Photos::find($id);
        return response()->json([
            'status' => 200,
            'photos' => $photos,
        ]);
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
    public function suprimphoto($id_photo){
        Photos::find($id_photo)->delete();
        return response()->json();
      }
    
}
