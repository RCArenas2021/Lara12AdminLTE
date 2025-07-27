<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * Atributos que se pueden asignar de forma masiva.
     *
     * @var list<string>
     */
    protected array $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * Atributos que deben ocultarse al serializar.
     *
     * @var list<string>
     */
    protected array $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Obtener los atributos que deben convertirse (cast).
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
