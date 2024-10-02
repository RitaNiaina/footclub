<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;
    protected $primaryKey="id_photo";
    protected $fillable = [
        'url_photo',
        'desription_photo',
    ];
    
}
