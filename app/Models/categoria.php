<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public static function findOrdFail($categorium)
    {
        return static::findOrFail($categorium);
    }

    protected $table = 'categorias'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'IdCategoria'; // Nombre de la clave primaria
}
        