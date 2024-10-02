<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Comptecontroller extends Controller
{
    public function register(){
        
        return view('Compte.enregistrer');
    }
            
    public function registerpost(Request $request){ 
        $comp= new User();
        $comp->name = $request->name;
        $comp->email = $request->email;
        $comp->password = Hash::make($request->password);
        $comp->save();

        return back()->with('success','votre information a bien été ajouté');
    }
    public function login(){
        
        return view('Compte.Utilisateur');
    }

    public function loginpost(Request $request)
    { 
      
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
       if(Auth::attempt($credetials)){
        return redirect('/clubes')->with('success',);
       }
        return back()->with('error','email ou mot de passe incorrect');
    }
  
}
