<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Controlador de Verificación de Correo
    |--------------------------------------------------------------------------
    |
    | Este controlador se encarga de manejar la verificación de correo para
    | cualquier usuario que se haya registrado recientemente en la aplicación.
    | También puede reenviar el correo si el usuario no recibió el mensaje
    | original.
    |
    */

    use VerifiesEmails;

    /**
     * Ruta a la que se redirige a los usuarios después de verificar su correo.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Crear una nueva instancia del controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
