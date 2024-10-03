<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matcher extends Model
{
    use HasFactory;
    protected $primaryKey="id_mat";
    protected $fillable = [
        'id_club',
        'id_equi',
        'date_mat',
        'heure_mat',
        'caract_mat',
        'statue',
        'scor_mmfc',
        'scor_mat',
        'carte_rouge',
        'carte_jaune',
        'id_champ',
        'lieu_match',
        'latitude',
        'longitude',
        
    ];
}
