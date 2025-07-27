<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Controlador de Confirmación de Contraseña
    |--------------------------------------------------------------------------
    |
    | Este controlador se encarga de gestionar la confirmación de contraseña y
    | utiliza un trait para incluir dicho comportamiento. Puedes explorar el
    | trait y sobreescribir las funciones que necesites personalizar.
    |
    */

    use ConfirmsPasswords;

    /**
     * Ruta a la que se redirige a los usuarios cuando la URL deseada falla.
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
    }
}
