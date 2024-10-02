<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Photos;

class galleriecontroller extends Controller
{
    
    public function galleri(){
        $photos = DB::select('select * from photos');
        return view('gallerie.galle',compact('photos'));
        }
     public function affiche($id){
        try {
            $photo= Photos::find($id);
        return response()->json([
            'photo' => $photo,
        ]);
        } catch (\Throwable $th) {
            $th;
        }
        
    }
        
    }

