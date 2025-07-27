<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Logo de Laravel"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Estado de Construcción"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total de Descargas"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Última Versión Estable"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="Licencia"></a>
</p>

## Proyecto Laravel 12 con AdminLTE 4

Esta aplicación es un **sistema de administración completo** que integra **Laravel 12** con la plantilla **AdminLTE 4**, diseñado para proporcionar una base sólida para el desarrollo de aplicaciones web administrativas modernas.

### 🚀 Características Principales

- **Framework**: Laravel 12.x con las últimas características
- **Interfaz**: AdminLTE 4 totalmente integrado y funcional
- **Autenticación**: Sistema completo de login, registro y recuperación de contraseñas
- **Gestión de Usuarios**: CRUD completo con roles y permisos
- **Dashboard**: Múltiples versiones de dashboard (v1, v2, v3)
- **Configuración**: Panel de configuraciones del sistema
- **Responsive**: Diseño adaptable a dispositivos móviles
- **Base de Datos**: Configurado para MySQL con Laragon

### 📋 Estructura del Proyecto

#### **Controladores Implementados**
- `DashboardController`: Gestión del panel principal con múltiples vistas
- `UserController`: CRUD completo para gestión de usuarios
- `SettingsController`: Configuraciones generales del sistema
- `LoginController`, `RegisterController`, `ForgotPasswordController`: Autenticación completa

#### **Modelos y Base de Datos**
- **Modelo User** con roles y permisos
- **Migraciones**:
  - `create_users_table`: Tabla principal de usuarios
  - `add_role_to_users_table`: Sistema de roles integrado
  - Sesiones y tokens de recuperación de contraseña
- **Seeders**:
  - `UserSeeder`: Usuarios por defecto (admin y usuario estándar)
  - `DatabaseSeeder`: Configuración inicial de la base de datos

#### **Vistas y Componentes**
- **Layouts**: Estructura base AdminLTE completamente funcional
- **Componentes**: Navbar, sidebar, footer y elementos reutilizables
- **Vistas de Admin**: Dashboard, usuarios, configuraciones
- **Autenticación**: Formularios de login, registro y recuperación

#### **Dependencias Instaladas**
- **Laravel Framework 12.x**: Framework principal
- **Laravel UI**: Scaffolding de interfaz de usuario
- **Spatie Laravel Permission**: Sistema avanzado de roles y permisos
- **Laravel Debugbar**: Herramientas de desarrollo
- **Laravel Pint**: Estilo de código
- **Laravel Sail**: Entorno de desarrollo con Docker

### 🛠️ Instalación y Configuración

#### **Requisitos Previos**
- PHP 8.2 o superior
- Composer
- Node.js y npm
- MySQL (recomendado con Laragon)

#### **Pasos de Instalación**

1. **Clonar el repositorio**:
```bash
git clone [tu-repositorio]
cd proyecto-adminlte
```

2. **Instalar dependencias**:
```bash
composer install
npm install
```

3. **Configurar el entorno**:
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configurar la base de datos** en `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lara12adminlte
DB_USERNAME=root
DB_PASSWORD=
```

5. **Ejecutar migraciones y seeders**:
```bash
php artisan migrate
php artisan db:seed
```

6. **Compilar assets**:
```bash
npm run dev
```

7. **Iniciar el servidor**:
```bash
php artisan serve
```

### 👥 Usuarios por Defecto

El sistema viene con usuarios predefinidos para pruebas:

- **Administrador**:
  - Email: `admin@example.com`
  - Contraseña: `password`
  - Rol: `admin`

- **Usuario Estándar**:
  - Email: `user@example.com`
  - Contraseña: `password`
  - Rol: `user`

### 🎯 Rutas Principales

#### **Panel de Administración** (`/admin`)
- `/admin/dashboard` - Panel principal
- `/admin/dashboard-v2` - Dashboard alternativo
- `/admin/dashboard-v3` - Tercer tipo de dashboard
- `/admin/users` - Gestión de usuarios (CRUD completo)
- `/admin/settings` - Configuraciones del sistema

#### **Autenticación**
- `/login` - Iniciar sesión
- `/register` - Registro (solo para usuarios autenticados)
- `/forgot-password` - Recuperar contraseña

#### **Páginas de Ejemplo**
- `/admin/examples/widgets` - Widgets de ejemplo
- `/admin/examples/calendar` - Calendario
- `/admin/examples/gallery` - Galería
- `/admin/examples/kanban` - Tablero Kanban
- `/admin/examples/invoice` - Facturas
- `/admin/examples/profile` - Perfil de usuario

### 🎨 Personalización

#### **Estilos Personalizados**
- `public/assets/css/app.css` - Estilos adicionales
- `public/assets/js/app.js` - Scripts personalizados

#### **Configuración AdminLTE**
- Layout principal en `resources/views/layouts/adminlte.blade.php`
- Componentes modulares en `resources/views/components/adminlte/`
- Sidebar personalizable con menús dinámicos

### 🧪 Testing

Ejecutar la suite de pruebas:
```bash
composer test
```

Ejecutar pruebas con cobertura:
```bash
php artisan test --coverage
```

### 📚 Acerca de Laravel

Laravel es un framework de aplicaciones web con una sintaxis expresiva y elegante. Creemos que el desarrollo debe ser una experiencia agradable y creativa para ser verdaderamente satisfactorio. Laravel elimina el dolor del desarrollo facilitando tareas comunes utilizadas en muchos proyectos web, tales como:

- [Motor de enrutamiento simple y rápido](https://laravel.com/docs/routing)
- [Potente contenedor de inyección de dependencias](https://laravel.com/docs/container)
- Múltiples backends para almacenamiento de [sesiones](https://laravel.com/docs/session) y [caché](https://laravel.com/docs/cache)
- [ORM de base de datos](https://laravel.com/docs/eloquent) expresivo e intuitivo
- [Migraciones de esquema](https://laravel.com/docs/migrations) agnósticas de base de datos
- [Procesamiento robusto de trabajos en segundo plano](https://laravel.com/docs/queues)
- [Transmisión de eventos en tiempo real](https://laravel.com/docs/broadcasting)

Laravel es accesible, potente y proporciona las herramientas necesarias para aplicaciones grandes y robustas.

### 📖 Aprender Laravel

Laravel cuenta con la [documentación](https://laravel.com/docs) más extensa y completa y la biblioteca de tutoriales en video de todos los frameworks modernos de aplicaciones web, lo que hace que sea muy fácil comenzar con el framework.

También puedes probar el [Laravel Bootcamp](https://bootcamp.laravel.com), donde te guiarán a través de la construcción de una aplicación Laravel moderna desde cero.

Si no te gusta leer, [Laracasts](https://laracasts.com) puede ayudarte. Laracasts contiene miles de tutoriales en video sobre una variedad de temas que incluyen Laravel, PHP moderno, pruebas unitarias y JavaScript. Mejora tus habilidades profundizando en nuestra biblioteca completa de videos.

### 🤝 Patrocinadores de Laravel

Nos gustaría extender nuestro agradecimiento a los siguientes patrocinadores por financiar el desarrollo de Laravel. Si estás interesado en convertirte en patrocinador, visita el [programa de Socios de Laravel](https://partners.laravel.com).

#### **Socios Premium**

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

### 🤝 Contribuir

¡Gracias por considerar contribuir al framework Laravel! La guía de contribución se puede encontrar en la [documentación de Laravel](https://laravel.com/docs/contributions).

### 📜 Código de Conducta

Para garantizar que la comunidad de Laravel sea acogedora para todos, revisa y cumple con el [Código de Conducta](https://laravel.com/docs/contributions#code-of-conduct).

### 🔒 Vulnerabilidades de Seguridad

Si descubres una vulnerabilidad de seguridad dentro de Laravel, envía un correo electrónico a Taylor Otwell a través de [taylor@laravel.com](mailto:taylor@laravel.com). Todas las vulnerabilidades de seguridad serán abordadas rápidamente.

### 📄 Licencia

El framework Laravel es software de código abierto licenciado bajo la [licencia MIT](https://opensource.org/licenses/MIT).

---

### 📞 Soporte y Contacto

Para soporte técnico del proyecto AdminLTE:
- Documentación: Consulta los comentarios en el código y archivos de configuración
- Issues: Utiliza el sistema de issues del repositorio
- Email: Contacta al equipo de desarrollo

**Desarrollado con ❤️ usando Laravel 12 y AdminLTE 4**