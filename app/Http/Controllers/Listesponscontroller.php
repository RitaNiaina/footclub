<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;
class Listesponscontroller extends Controller
{
    public function logospons(){
        $sponse = DB::select('select logo_spons,nom_spons from sponsors');
        return view('sponsor.liste',compact('sponse'));
          
        }
}
