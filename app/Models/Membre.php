<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $primaryKey="id_mem";
    protected $fillable = [
        'id_equi',
        'nom_mem',
        'prenom_mem',
        'datenaiss_mem',
        'nationalite_mem',
        'adress_mem',
        'tel_mem',
        'email_mem',
        'sexe_mem',
        'photo_mem',
        'post_mem',
        
    ];
}
