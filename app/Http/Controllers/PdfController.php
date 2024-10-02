<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joueur;
use PDF;
class PdfController extends Controller
{
    public function generatePDF()
    {
        // $users = Joueur::get();
        
        // $data = [
        //     'title' => 'bienvenu welcome',
        //     'date' => date('m/d/Y'),
        //     'users' => $users
        // ];

        $joueurs = Joueur::all();
        $pdf = PDF::loadView('myPDF',compact('joueurs'));
        return $pdf->download('webappfix.pdf');
    }
}
