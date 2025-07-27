<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modelo para guardar configuraciones clave/valor del sistema.
 */
class Setting extends Model
{
    use HasFactory;

    /**
     * Atributos asignables de forma masiva.
     *
     * @var list<string>
     */
    protected $fillable = [
        'key',
        'value',
    ];
}
