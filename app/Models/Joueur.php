<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    protected $primaryKey="id_jou";
    protected $fillable = [
        'id_tit',
        'id_equi',
        'nom_jou',
        'prenom_jou',
        'datenaiss_jou',
        'age_jou',
        'nationalite_jou',
        'adress_jou',
        'tel_jou',
        'email_jou',
        'sexe_jou',
        'pied_jou',
        'photo_jou',
        'post_jou',
        'num_jou',
    ];
}
