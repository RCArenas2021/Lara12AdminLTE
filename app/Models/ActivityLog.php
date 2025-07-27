<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Registro de actividades de usuarios
 * Creado el 2025-07-27
 */
class ActivityLog extends Model
{
    use HasFactory;

    protected array $fillable = [
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
