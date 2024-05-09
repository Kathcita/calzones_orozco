<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    public static function findOrdFail($id)
    {
        return static::findOrFail($id);
    }

    protected $table = 'marcas'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'IdMarca'; // Nombre de la clave primaria
}
