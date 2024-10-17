<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ImageAcueductos;

class Acueductos extends Model
{
    use HasFactory;

    // Tabla a la que apunta el modelo.
    protected $table = 'acueductos';

    protected $primaryKey = 'id';

    // Define que campos de la tabla del modelo que tiene asignacion masiva.
    protected $fillable = ['nombre', 'municipio', 'ubicacion', 'descripcion', 'foto', 'estatus'];

    // Relación One to Many (Uno a muchos), un registro puede tener muchas imágenes
    public function imagenesAcueductos(): HasMany
    {
        return $this->hasMany(ImageAcueductos::class, 'idAcueductos', 'id');
    }

    public $timestamps = true;
}
