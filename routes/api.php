<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Equipecontroller;
use App\Http\Controllers\Titrecontroller;
use App\Http\Controllers\Actualitercontroller;
use App\Http\Controllers\Sponsorcontroller;
use App\Http\Controllers\Championcontroller;
use App\Http\Controllers\Photocontroller;
use App\Http\Controllers\Clubcontroller;
use App\Http\Controllers\Matchercontroller;
use App\Http\Controllers\Jouercontroller;
use App\Http\Controllers\Membrecontroller;
use App\Http\Controllers\galleriecontroller;
use App\Http\Controllers\Listecontroller;
use App\Http\Controllers\calendrecontroller;
use App\Http\Controllers\resultatcontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/equipe', [Equipecontroller::class,'listeequipe']);
Route::get('/ajouter', [Equipecontroller::class,'ajoutequip']);
Route::post('/ajout/equipe', [Equipecontroller::class,'ajout_equipe']);

Route::post('/updatequipe', [Equipecontroller::class,'modequipe']);
Route::get('/superequip/{id_equi}', [Equipecontroller::class,'superequip']);
Route::get('/modif/{id}', [Equipecontroller::class,'modif']);



Route::get('/titre', [Titrecontroller::class,'listetitre']);
Route::get('/ajoutert', [Titrecontroller::class,'ajoutitre']);
Route::post('/ajout/titre', [Titrecontroller::class,'ajout_titre']);
Route::post('/updatetitre', [Titrecontroller::class,'modetitre']);
Route::get('/modiftit/{id}', [Titrecontroller::class,'modiftit']);
Route::get('/suprimtit/{id_tit}', [Titrecontroller::class,'suprimtit']);

Route::get('/actualite', [Actualitercontroller::class,'listeactu']);
Route::get('/ajoutactu', [Actualitercontroller::class,'ajouteactu']);
Route::post('/ajout/actualite', [Actualitercontroller::class,'ajout_actu']);
Route::post('/updateactu', [Actualitercontroller::class,'modeactu']);
Route::get('/modifact/{id}', [Actualitercontroller::class,'modifact']);
Route::get('/suprimactu/{id_actu}', [Actualitercontroller::class,'suprimactu']);

Route::get('/sponsore', [Sponsorcontroller::class,'listespons']);
Route::get('/ajoutespons', [Sponsorcontroller::class,'ajoutspons']);
Route::post('/ajout/sponsor', [Sponsorcontroller::class,'ajout_spons']);
Route::post('/updatspons', [Sponsorcontroller::class,'modespons']);
Route::get('/modifspons/{id}', [Sponsorcontroller::class,'modifspons']);
Route::get('/suprimspons/{id_spons}', [Sponsorcontroller::class,'suprimspons']);


Route::get('/champion', [Championcontroller::class,'listechamp']);
Route::get('/ajoutechamp', [Championcontroller::class,'ajoutchamp']);
Route::post('/ajout/champ', [Championcontroller::class,'ajout_champ']);
Route::post('/updatchamp', [Championcontroller::class,'modechamp']);
Route::get('/modifchamp/{id}', [Championcontroller::class,'modifchamp']);
Route::get('/suprimchamp/{id_champ}', [Championcontroller::class,'suprimchamp']);


Route::get('/phots', [Photocontroller::class,'listephoto']);
Route::get('/ajoutephoto', [Photocontroller::class,'ajoutphoto']);
Route::post('/ajout/photo', [Photocontroller::class,'ajout_photo']);
Route::post('/updatphoto', [Photocontroller::class,'modephoto']);
Route::get('/modifphoto/{id}', [Photocontroller::class,'modifphoto']);
Route::get('/suprimphoto/{id_photo}', [Photocontroller::class,'suprimphoto']);

Route::get('/clubes', [Clubcontroller::class,'listeclub']);
Route::get('/ajouteclub', [Clubcontroller::class,'ajoutclub']);
Route::post('/ajout/club', [Clubcontroller::class,'ajout_club']);
Route::post('/updatclub', [Clubcontroller::class,'modeclub']);
Route::get('/modifclub/{id}', [Clubcontroller::class,'modifclub']);
Route::get('/suprimclub/{id_club}', [Clubcontroller::class,'suprimclub']);

Route::get('/matches', [Matchercontroller::class,'listematch']);
Route::get('/ajoutematch', [Matchercontroller::class,'ajoutmatch']);
Route::post('/ajout/matche', [Matchercontroller::class,'ajout_matche']);
Route::post('/updatmatch', [Matchercontroller::class,'modematch']);
Route::get('/modifmatch/{id}', [Matchercontroller::class,'modifmatch']);
Route::get('/suprimmatch/{id_mat}', [Matchercontroller::class,'suprimmatch']);


Route::get('/joueures', [Jouercontroller::class,'listejoeur']);
Route::get('/ajoutjou', [Jouercontroller::class,'ajoutjou']);
Route::post('/ajout/joueur', [Jouercontroller::class,'ajout_joeur']);
Route::post('/updatjoueu', [Jouercontroller::class,'modejou']);
Route::get('/modifjoueur/{id}', [Jouercontroller::class,'modifjoueur']);
Route::get('/suprimjou/{id_jou}', [Jouercontroller::class,'suprimjou']);

Route::get('/bureaux', [Membrecontroller::class,'listemembre']);
Route::get('/ajoutmem', [Membrecontroller::class,'ajoutmem']);
Route::post('/ajout/membre', [Membrecontroller::class,'ajout_membre']);
Route::post('/updatmem', [Membrecontroller::class,'modemem']);
Route::get('/modifmem/{id}', [Membrecontroller::class,'modifmem']);
Route::get('/suprimem/{id_mem}', [Membrecontroller::class,'suprimem']);

Route::get('/gallerie', [galleriecontroller::class,'galleri']);
Route::get('/gal/{id}', [galleriecontroller::class,'affiche']);

Route::get('/Listejoueur', [Listecontroller::class,'listejoueur']);
Route::get('/infojou/{id}', [Listecontroller::class,'infojoue']);

Route::get('/calendars', [calendrecontroller::class,'calendrier']);

Route::get('/resultat', [resultatcontroller::class,'resu']);