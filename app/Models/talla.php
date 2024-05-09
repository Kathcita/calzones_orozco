<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class talla extends Model
{
    public static function findOrdFail($id)
    {
        return static::findOrFail($id);
    }
    
    protected $table = 'Tallas';
    protected $primaryKey = 'IdTalla';
}
