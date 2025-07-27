<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Controlador de Restablecimiento de Contraseñas
    |--------------------------------------------------------------------------
    |
    | Este controlador se encarga de manejar los correos de restablecimiento
    | de contraseña e incluye un trait que ayuda a enviar estas notificaciones
    | desde tu aplicación a los usuarios. Puedes explorar el trait y
    | sobreescribir cualquier método si es necesario.
    |
    */

    use SendsPasswordResetEmails;
}
