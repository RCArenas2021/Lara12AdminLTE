<!--begin::Header - Barra de navegación superior-->
<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container - Contenedor principal del navbar-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links - Enlaces del lado izquierdo-->
        <ul class="navbar-nav">
            <!--begin::Sidebar Toggle - Botón para mostrar/ocultar el sidebar-->
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <!--end::Sidebar Toggle-->
            
            <!--begin::Home Link - Enlace a inicio (solo visible en pantallas medianas y grandes)-->
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('home') ?? '/' }}" class="nav-link">Inicio</a>
            </li>
            <!--end::Home Link-->
            
            <!--begin::Contact Link - Enlace de contacto (solo visible en pantallas medianas y grandes)-->
            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">Contacto</a>
            </li>
            <!--end::Contact Link-->
        </ul>
        <!--end::Start Navbar Links-->
        
        <!--begin::End Navbar Links - Enlaces del lado derecho-->
        <ul class="navbar-nav ms-auto">
            <!--begin::Navbar Search - Buscador desplegable-->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="bi bi-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <!--end::Navbar Search-->
            
            <!--begin::Messages Dropdown Menu - Menú desplegable de mensajes-->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-chat-text"></i>
                    <span class="navbar-badge badge text-bg-danger">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                        <!--begin::Message - Mensaje individual-->
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/img/user1-128x128.jpg') }}" alt="Avatar de Usuario" class="img-size-50 rounded-circle me-3">
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                </h3>
                                <p class="fs-7">Llamé pero no hubo respuesta...</p>
                                <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> Hace 4 horas</p>
                            </div>
                        </div>
                        <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!--begin::Message - Segundo mensaje-->
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/img/user8-128x128.jpg') }}" alt="Avatar de Usuario" class="img-size-50 rounded-circle me-3">
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-end fs-7 text-secondary"><i class="bi bi-star-fill"></i></span>
                                </h3>
                                <p class="fs-7">Te envié unas fotos...</p>
                                <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> Hace 4 horas</p>
                            </div>
                        </div>
                        <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Ver Todos los Mensajes</a>
                </div>
            </li>
            <!--end::Messages Dropdown Menu-->
            
            <!--begin::Notifications Dropdown Menu - Menú desplegable de notificaciones-->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>
                    <span class="navbar-badge badge text-bg-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">15 Notificaciones</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-envelope me-2"></i> 4 nuevos mensajes
                        <span class="float-end text-secondary fs-7">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-people-fill me-2"></i> 8 solicitudes de amistad
                        <span class="float-end text-secondary fs-7">12 horas</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-file-earmark-fill me-2"></i> 3 nuevos reportes
                        <span class="float-end text-secondary fs-7">2 días</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Ver Todas las Notificaciones</a>
                </div>
            </li>
            <!--end::Notifications Dropdown Menu-->
            
            <!--begin::Fullscreen Toggle - Botón para pantalla completa-->
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
            </li>
            <!--end::Fullscreen Toggle-->
            
            <!--begin::User Menu Dropdown - Menú desplegable del usuario autenticado-->
            @auth
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ Auth::user()->avatar ?? asset('assets/img/user2-160x160.jpg') }}" 
                         class="user-image rounded-circle shadow" 
                         alt="Imagen de Usuario">
                    <span class="d-none d-md-inline">{{ Auth::user()->name ?? 'Usuario' }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image - Cabecera del menú con imagen y datos del usuario-->
                    <li class="user-header text-bg-primary">
                        <img src="{{ Auth::user()->avatar ?? asset('assets/img/user2-160x160.jpg') }}" 
                             class="rounded-circle shadow" 
                             alt="Imagen de Usuario">
                        <p>
                            {{ Auth::user()->name ?? 'Usuario' }} - {{ Auth::user()->role ?? 'Administrador' }}
                            <small>Miembro desde {{ Auth::user()->created_at ? Auth::user()->created_at->format('M. Y') : 'Nov. 2023' }}</small>
                        </p>
                    </li>
                    <!--end::User Image-->
                    
                    <!--begin::Menu Body - Cuerpo del menú con estadísticas-->
                    <li class="user-body">
                        <!--begin::Row - Fila con estadísticas del usuario-->
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Seguidores</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Ventas</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Amigos</a>
                            </div>
                        </div>
                        <!--end::Row-->
                    </li>
                    <!--end::Menu Body-->
                    
                    <!--begin::Menu Footer - Pie del menú con acciones-->
                    <li class="user-footer">
                        <a href="{{ route('profile.show') ?? '#' }}" class="btn btn-default btn-flat">Perfil</a>
                        <a href="#" class="btn btn-default btn-flat float-end"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                        <!-- Formulario oculto para logout con token CSRF -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <!--end::Menu Footer-->
                </ul>
            </li>
            @else
            <!--begin::Guest Login Link - Enlace de login para usuarios no autenticados-->
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
            </li>
            <!--end::Guest Login Link-->
            @endauth
            <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
<!--end::Header-->