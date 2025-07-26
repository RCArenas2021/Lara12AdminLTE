<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


// Ruta principal de la aplicación
Route::get('/', function () {
    return view('welcome');
});

// Autenticación básica
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'store'])->name('password.update');

// Registro solo accesible para usuarios autenticados (administradores)
Route::middleware('auth')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

/*
|--------------------------------------------------------------------------
| Rutas del Panel de Administración
|--------------------------------------------------------------------------
|
| Aquí se definen todas las rutas para el panel de administración AdminLTE.
| Todas las rutas están protegidas por middleware de autenticación y 
| tienen el prefijo 'admin' y el name 'admin.'
|
*/

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    
    /*
    |--------------------------------------------------------------------------
    | Dashboard Principal
    |--------------------------------------------------------------------------
    */
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.main');
    
    // Dashboards alternativos (basados en index2.html, index3.html)
    Route::get('/dashboard-v2', [DashboardController::class, 'dashboardV2'])->name('dashboard.v2');
    Route::get('/dashboard-v3', [DashboardController::class, 'dashboardV3'])->name('dashboard.v3');
    
    /*
    |--------------------------------------------------------------------------
    | Gestión de Usuarios
    |--------------------------------------------------------------------------
    */
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{user}', [UserController::class, 'show'])->name('show');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
        
        // Rutas adicionales para gestión de usuarios
        Route::patch('/{user}/activate', [UserController::class, 'activate'])->name('activate');
        Route::patch('/{user}/deactivate', [UserController::class, 'deactivate'])->name('deactivate');
        Route::get('/{user}/profile', [UserController::class, 'profile'])->name('profile');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Configuraciones del Sistema
    |--------------------------------------------------------------------------
    */
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('index');
        Route::get('/general', [SettingsController::class, 'general'])->name('general');
        Route::get('/security', [SettingsController::class, 'security'])->name('security');
        Route::get('/email', [SettingsController::class, 'email'])->name('email');
        Route::get('/backup', [SettingsController::class, 'backup'])->name('backup');
        
        // Rutas para guardar configuraciones
        Route::post('/general', [SettingsController::class, 'updateGeneral'])->name('general.update');
        Route::post('/security', [SettingsController::class, 'updateSecurity'])->name('security.update');
        Route::post('/email', [SettingsController::class, 'updateEmail'])->name('email.update');
        
        // Rutas para backup
        Route::post('/backup/create', [SettingsController::class, 'createBackup'])->name('backup.create');
        Route::get('/backup/download/{backup}', [SettingsController::class, 'downloadBackup'])->name('backup.download');
        Route::delete('/backup/{backup}', [SettingsController::class, 'deleteBackup'])->name('backup.delete');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Páginas de Ejemplo y Utilidades
    |--------------------------------------------------------------------------
    */
    Route::prefix('examples')->name('examples.')->group(function () {
        // Páginas de ejemplo basadas en los archivos HTML de AdminLTE
        Route::get('/widgets', function () {
            return view('admin.examples.widgets');
        })->name('widgets');
        
        Route::get('/calendar', function () {
            return view('admin.examples.calendar');
        })->name('calendar');
        
        Route::get('/gallery', function () {
            return view('admin.examples.gallery');
        })->name('gallery');
        
        Route::get('/kanban', function () {
            return view('admin.examples.kanban');
        })->name('kanban');
        
        Route::get('/invoice', function () {
            return view('admin.examples.invoice');
        })->name('invoice');
        
        Route::get('/profile', function () {
            return view('admin.examples.profile');
        })->name('profile');
        
        Route::get('/e-commerce', function () {
            return view('admin.examples.e-commerce');
        })->name('e-commerce');
        
        Route::get('/contacts', function () {
            return view('admin.examples.contacts');
        })->name('contacts');
        
        Route::get('/faq', function () {
            return view('admin.examples.faq');
        })->name('faq');
        
        Route::get('/contact-us', function () {
            return view('admin.examples.contact-us');
        })->name('contact-us');
        
        // Páginas de error personalizadas
        Route::get('/404', function () {
            return view('admin.examples.404');
        })->name('404');
        
        Route::get('/500', function () {
            return view('admin.examples.500');
        })->name('500');
        
        Route::get('/blank', function () {
            return view('admin.examples.blank');
        })->name('blank');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Elementos de UI y Formularios
    |--------------------------------------------------------------------------
    */
    Route::prefix('ui')->name('ui.')->group(function () {
        // Elementos generales de UI
        Route::get('/general', function () {
            return view('admin.ui.general');
        })->name('general');
        
        Route::get('/icons', function () {
            return view('admin.ui.icons');
        })->name('icons');
        
        Route::get('/buttons', function () {
            return view('admin.ui.buttons');
        })->name('buttons');
        
        Route::get('/sliders', function () {
            return view('admin.ui.sliders');
        })->name('sliders');
        
        Route::get('/modals', function () {
            return view('admin.ui.modals');
        })->name('modals');
        
        Route::get('/navbar', function () {
            return view('admin.ui.navbar');
        })->name('navbar');
        
        Route::get('/timeline', function () {
            return view('admin.ui.timeline');
        })->name('timeline');
        
        Route::get('/ribbons', function () {
            return view('admin.ui.ribbons');
        })->name('ribbons');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Formularios
    |--------------------------------------------------------------------------
    */
    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('/general', function () {
            return view('admin.forms.general');
        })->name('general');
        
        Route::get('/advanced', function () {
            return view('admin.forms.advanced');
        })->name('advanced');
        
        Route::get('/editors', function () {
            return view('admin.forms.editors');
        })->name('editors');
        
        Route::get('/validation', function () {
            return view('admin.forms.validation');
        })->name('validation');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Tablas
    |--------------------------------------------------------------------------
    */
    Route::prefix('tables')->name('tables.')->group(function () {
        Route::get('/simple', function () {
            return view('admin.tables.simple');
        })->name('simple');
        
        Route::get('/data', function () {
            return view('admin.tables.data');
        })->name('data');
        
        Route::get('/jsgrid', function () {
            return view('admin.tables.jsgrid');
        })->name('jsgrid');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Gráficos
    |--------------------------------------------------------------------------
    */
    Route::prefix('charts')->name('charts.')->group(function () {
        Route::get('/chartjs', function () {
            return view('admin.charts.chartjs');
        })->name('chartjs');
        
        Route::get('/flot', function () {
            return view('admin.charts.flot');
        })->name('flot');
        
        Route::get('/inline', function () {
            return view('admin.charts.inline');
        })->name('inline');
        
        Route::get('/uplot', function () {
            return view('admin.charts.uplot');
        })->name('uplot');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Sistema de Correo (Mailbox)
    |--------------------------------------------------------------------------
    */
    Route::prefix('mailbox')->name('mailbox.')->group(function () {
        Route::get('/', function () {
            return view('admin.mailbox.inbox');
        })->name('inbox');
        
        Route::get('/compose', function () {
            return view('admin.mailbox.compose');
        })->name('compose');
        
        Route::get('/read/{id?}', function ($id = 1) {
            return view('admin.mailbox.read', compact('id'));
        })->name('read');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Gestión de Proyectos (si se implementa)
    |--------------------------------------------------------------------------
    */
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/', function () {
            return view('admin.projects.index');
        })->name('index');
        
        Route::get('/create', function () {
            return view('admin.projects.create');
        })->name('create');
        
        Route::get('/{project}/edit', function ($project) {
            return view('admin.projects.edit', compact('project'));
        })->name('edit');
        
        Route::get('/{project}', function ($project) {
            return view('admin.projects.show', compact('project'));
        })->name('show');
    });
    
    /*
    |--------------------------------------------------------------------------
    | API para AJAX (rutas internas para funcionalidad dinámica)
    |--------------------------------------------------------------------------
    */
    Route::prefix('api')->name('api.')->group(function () {
        // Datos para gráficos del dashboard
        Route::get('/dashboard/stats', [DashboardController::class, 'getStats'])->name('dashboard.stats');
        Route::get('/dashboard/chart-data', [DashboardController::class, 'getChartData'])->name('dashboard.chart-data');
        
        // Búsqueda de usuarios para autocompletado
        Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
        
        // Notificaciones
        Route::get('/notifications', function () {
            return response()->json([
                'notifications' => [
                    ['id' => 1, 'message' => 'Nuevo usuario registrado', 'time' => '5 min ago'],
                    ['id' => 2, 'message' => 'Backup completado', 'time' => '1 hora ago'],
                    ['id' => 3, 'message' => 'Sistema actualizado', 'time' => '2 horas ago'],
                ]
            ]);
        })->name('notifications');
    });
    
    /*
    |--------------------------------------------------------------------------
    | Rutas de Layout (para testing y demos)
    |--------------------------------------------------------------------------
    */
    Route::prefix('layout')->name('layout.')->group(function () {
        Route::get('/top-nav', function () {
            return view('admin.layout.top-nav');
        })->name('top-nav');
        
        Route::get('/boxed', function () {
            return view('admin.layout.boxed');
        })->name('boxed');
        
        Route::get('/fixed-sidebar', function () {
            return view('admin.layout.fixed-sidebar');
        })->name('fixed-sidebar');
        
        Route::get('/fixed-navbar', function () {
            return view('admin.layout.fixed-navbar');
        })->name('fixed-navbar');
        
        Route::get('/fixed-footer', function () {
            return view('admin.layout.fixed-footer');
        })->name('fixed-footer');
        
        Route::get('/collapsed-sidebar', function () {
            return view('admin.layout.collapsed-sidebar');
        })->name('collapsed-sidebar');
    });
});

/*
|--------------------------------------------------------------------------
| Rutas públicas relacionadas con admin (si las hay)
|--------------------------------------------------------------------------
| Estas rutas no requieren autenticación pero están relacionadas
| con el panel de administración
*/

// Ruta para mostrar información pública del admin (opcional)
Route::get('/admin-info', function () {
    return view('admin.public.info');
})->name('admin.public.info');

// Ruta para solicitar acceso al panel (opcional)
Route::get('/admin/request-access', function () {
    return view('admin.public.request-access');
})->name('admin.public.request-access');

Route::post('/admin/request-access', function () {
    // Lógica para procesar solicitud de acceso
    return redirect()->back()->with('success', 'Solicitud de acceso enviada correctamente.');
})->name('admin.public.request-access.submit');