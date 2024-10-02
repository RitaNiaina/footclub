<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    use HasFactory;
    protected $primaryKey="id_tit";
    protected $fillable = [
        
        'nom_tit',
        'saison_tit',
    ];
}
