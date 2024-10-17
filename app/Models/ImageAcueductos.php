<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageAcueductos extends Model
{
    use HasFactory;

    // Instancio la tabla 'acueductos'
    protected $table = 'image_acueductos';

    // Declaro los campos que usaré de la tabla 'acueductos'
    protected $fillable = ['nombre', 'formato', 'idAcueductos'];

    public function acueductos(): BelongsTo
    {
        return $this->belongsTo(Acueductos::class, 'idAcueductos','id');
    }
}
