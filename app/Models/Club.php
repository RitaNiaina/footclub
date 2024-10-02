<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $primaryKey="id_club";
    protected $fillable = [
        'nom_club',
        'logo_club',
    ];
}
