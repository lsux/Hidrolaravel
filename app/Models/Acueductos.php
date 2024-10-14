<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acueductos extends Model
{
    use HasFactory;

    // Instancio la tabla 'acueductos'
    protected $table = 'acueductos';

    // Declaro los campos que usaré de la tabla 'acueductos'
    protected $fillable = ['nombre', 'municipio', 'ubicacion', 'descripcion', 'foto', 'estatus'];

    // Relación One to Many (Uno a muchos), un registro puede tener muchas imágenes
    public function imagenesAcueductos()
    {
        return $this->hasMany('App\ImageAcueductos');
    }
}
