<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table = 'proveedors'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'IdProveedor'; // Nombre de la clave primaria

}
