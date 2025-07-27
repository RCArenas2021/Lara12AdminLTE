<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Controlador para Restablecer Contraseñas
    |--------------------------------------------------------------------------
    |
    | Este controlador se encarga de procesar las solicitudes de
    | restablecimiento de contraseña y utiliza un trait para incluir este
    | comportamiento. Puedes explorar el trait y sobreescribir los métodos
    | que necesites ajustar.
    |
    */

    use ResetsPasswords;

    /**
     * Ruta a la que se redirige a los usuarios después de restablecer su
     * contraseña.
     *
     * @var string
     */
    protected $redirectTo = '/home';
}
