<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class intercontroller extends Controller
{
    public function inter(){
        return view('utilisateur.Utilisateur');
    }
}
