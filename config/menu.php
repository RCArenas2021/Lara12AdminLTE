<?php
/**
 * Configuración de menús del panel administrativo.
 * Actualizado: 2025-07-27
 */
return [
    'admin' => [
        [
            'title' => 'Dashboard',
            'icon' => 'bi bi-speedometer',
            'route' => 'admin.dashboard',
            'permission' => null,
        ],
        [
            'title' => 'Usuarios',
            'icon' => 'bi bi-people',
            'route' => 'admin.users.index',
            'permission' => 'manage users',
        ],
        [
            'title' => 'Bitácora',
            'icon' => 'bi bi-shield-lock',
            'route' => 'admin.logs.index',
            'permission' => 'view logs',
        ],
    ],
];
