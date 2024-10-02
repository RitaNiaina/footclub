<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $primaryKey="id_equi";
    protected $fillable = [
        
        'nom_equi',
    ];
}
