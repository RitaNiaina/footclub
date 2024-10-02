<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $primaryKey="id_spons";
    protected $fillable = [  
        'nom_spons',
        'debut_spons',
        'fin_spons',
        'logo_spons',
    ];
}
