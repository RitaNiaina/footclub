<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;
    protected $primaryKey="id_comp";
    protected $fillable = [
        'id_mem',
        'email_util',
        'motpass_util',
        
    ];
}
