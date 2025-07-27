<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modelo que representa los permisos de acceso a cada tabla.
 * Permite definir acciones permitidas por rol sobre tablas especificas.
 */
class TablePermission extends Model
{
    use HasFactory;

    /**
     * Atributos asignables de manera masiva.
     */
    protected $fillable = [
        'table_name',
        'role_id',
        'can_view',
        'can_create',
        'can_update',
        'can_delete',
    ];
}
