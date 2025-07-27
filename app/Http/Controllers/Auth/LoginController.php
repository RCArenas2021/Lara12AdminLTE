<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Controlador de Inicio de Sesión
    |--------------------------------------------------------------------------
    |
    | Este controlador se encarga de autenticar a los usuarios de la
    | aplicación y redirigirlos a su pantalla principal. Utiliza un trait
    | que facilita esta funcionalidad en tus aplicaciones.
    |
    */

    use AuthenticatesUsers;

    /**
     * Ruta a la que se redirige a los usuarios después de iniciar sesión.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
