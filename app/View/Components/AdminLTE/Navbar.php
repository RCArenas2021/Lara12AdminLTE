<?php

namespace App\View\Components\AdminLTE;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Crea una nueva instancia del componente.
     */
    public function __construct()
    {
        //
    }

    /**
     * Obtiene la vista o contenido que representa el componente.
     */
    public function render(): View|Closure|string
    {
        return view('components.adminlte.navbar');
    }
}
