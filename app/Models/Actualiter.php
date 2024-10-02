<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualiter extends Model
{
    use HasFactory;
    protected $primaryKey="id_actu";
    protected $fillable = [
        'titre_actu',
        'date_actu',
        'contenu_actu',
    ];
    
}
