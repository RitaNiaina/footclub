<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Actualiter;


class Newscontroller extends Controller
{
    public function actualite(){
        $new = DB::table('actualiters')
        ->select('titre_actu','photo_actu','contenu_actu')
        // ->where('statu', 'aujourdhui')
        ->get();
        return view('News.actual',compact('new'));
          
        }
}
