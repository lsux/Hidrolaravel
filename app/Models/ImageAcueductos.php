<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageAcueductos extends Model
{
    use HasFactory;

    // Instancio la tabla 'acueductos'
    protected $table = 'image_acueductos';

    // Declaro los campos que usaré de la tabla 'acueductos'
    protected $fillable = ['nombre', 'formato', 'idAcueductos'];
}
