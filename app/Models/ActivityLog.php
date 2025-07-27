<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Registro de actividades de usuarios
 * Creado el 2025-07-27
 */
class ActivityLog extends Model
{
    protected $fillable = [
        'user_id',
        'method',
        'url',
        'ip_address',
        'user_agent',
        'payload',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
