{{-- Vista del dashboard principal --}}
{{-- Última modificación: 26-07-2025 por ChatGPT --}}
@extends('layouts.adminlte')

@section('title', 'Dashboard')

@section('content_header')
    Dashboard
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <!--begin::Row-->
    <div class="row">
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 1-->
            <div class="small-box text-bg-primary">
                <div class="inner">
                    <h3>150</h3>
                    <p>Nuevos Pedidos</p>
                </div>
                <div class="small-box-icon">
                    <i class="bi bi-bag-fill"></i>
                </div>
                <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    Más información <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 1-->
        </div>
        <!--end::Col-->
        
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 2-->
            <div class="small-box text-bg-success">
                <div class="inner">
                    <h3>53<sup class="fs-5">%</sup></h3>
                    <p>Tasa de Rebote</p>
                </div>
                <div class="small-box-icon">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    Más información <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 2-->
        </div>
        <!--end::Col-->
        
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 3-->
            <div class="small-box text-bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>Registros de Usuario</p>
                </div>
                <div class="small-box-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <a href="#" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                    Más información <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 3-->
        </div>
        <!--end::Col-->
        
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 4-->
            <div class="small-box text-bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Visitantes Únicos</p>
                </div>
                <div class="small-box-icon">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                </div>
                <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    Más información <i class="bi bi-link-45deg"></i>
                </a>
            </div>
            <!--end::Small Box Widget 4-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    
    <!--begin::Row-->
    <div class="row">
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Ventas Mensuales</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="bi bi-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" role="menu">
                                <a href="#" class="dropdown-item">Acción</a>
                                <a href="#" class="dropdown-item">Otra acción</a>
                                <a href="#" class="dropdown-item">Algo más aquí</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Enlace separado</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>Ventas: 1 Ene, 2024 - 30 Jul, 2024</strong>
                            </p>
                            <div class="chart">
                                <!-- Aquí iría el gráfico de Chart.js -->
                                <div class="d-flex justify-content-center align-items-center" style="height: 300px; background: #f8f9fa; border: 2px dashed #dee2e6;">
                                    <p class="text-muted">Gráfico de Ventas (Chart.js se integrará aquí)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Progreso de Objetivo</strong>
                            </p>
                            <div class="progress-group">
                                Añadir productos al carrito
                                <span class="float-end"><b>160</b>/200</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar text-bg-primary" style="width: 80%"></div>
                                </div>
                            </div>
                            <div class="progress-group">
                                Completar compra
                                <span class="float-end"><b>310</b>/400</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar text-bg-danger" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="progress-group">
                                <span class="progress-text">Visitar página premium</span>
                                <span class="float-end"><b>480</b>/800</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar text-bg-success" style="width: 60%"></div>
                                </div>
                            </div>
                            <div class="progress-group">
                                Enviar solicitud
                                <span class="float-end"><b>250</b>/500</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar text-bg-warning" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-end">
                                <span class="description-percentage text-success"><i class="bi bi-caret-up-fill"></i> 17%</span>
                                <h5 class="description-header">€35,210.43</h5>
                                <span class="description-text">INGRESOS TOTALES</span>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-end">
                                <span class="description-percentage text-warning"><i class="bi bi-caret-left-fill"></i> 0%</span>
                                <h5 class="description-header">€10,390.90</h5>
                                <span class="description-text">COSTOS TOTALES</span>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-end">
                                <span class="description-percentage text-success"><i class="bi bi-caret-up-fill"></i> 20%</span>
                                <h5 class="description-header">€24,813.53</h5>
                                <span class="description-text">GANANCIA TOTAL</span>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="description-block">
                                <span class="description-percentage text-danger"><i class="bi bi-caret-down-fill"></i> 18%</span>
                                <h5 class="description-header">1200</h5>
                                <span class="description-text">PROGRESO DE OBJETIVO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    
    <!--begin::Row-->
    <div class="row">
        <!--begin::Col-->
        <div class="col-md-8">
            <!--begin::Últimos Pedidos-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Últimos Pedidos</h3>
                    <div class="card-tools">
                        <span class="badge text-bg-danger">8 Nuevos Pedidos</span>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>ID del Pedido</th>
                                    <th>Artículo</th>
                                    <th>Estado</th>
                                    <th>Popularidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">OR9842</a></td>
                                    <td>Llamar de la Naturaleza DLC</td>
                                    <td><span class="badge text-bg-success">Enviado</span></td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                        <span class="badge text-bg-danger">55%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">OR1848</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="badge text-bg-warning">Pendiente</span></td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar text-bg-warning" style="width: 70%"></div>
                                        </div>
                                        <span class="badge text-bg-warning">70%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">OR7429</a></td>
                                    <td>iPhone 6 Plus</td>
                                    <td><span class="badge text-bg-info">Procesando</span></td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar text-bg-info" style="width: 30%"></div>
                                        </div>
                                        <span class="badge text-bg-info">30%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">OR7429</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="badge text-bg-primary">Enviado</span></td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar text-bg-primary" style="width: 90%"></div>
                                        </div>
                                        <span class="badge text-bg-primary">90%</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <a href="#" class="btn btn-sm btn-info float-start">Realizar Nuevo Pedido</a>
                    <a href="#" class="btn btn-sm btn-secondary float-end">Ver Todos los Pedidos</a>
                </div>
            </div>
            <!--end::Últimos Pedidos-->
        </div>
        <!--end::Col-->
        
        <!--begin::Col-->
        <div class="col-md-4">
            <!--begin::Info Box-->
            <div class="info-box">
                <span class="info-box-icon text-bg-info"><i class="bi bi-bookmark-fill"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Marcadores</span>
                    <span class="info-box-number">41,410</span>
                </div>
            </div>
            <!--end::Info Box-->
            
            <!--begin::Info Box-->
            <div class="info-box">
                <span class="info-box-icon text-bg-success"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Me gusta</span>
                    <span class="info-box-number">41,410</span>
                </div>
            </div>
            <!--end::Info Box-->
            
            <!--begin::Info Box-->
            <div class="info-box">
                <span class="info-box-icon text-bg-warning"><i class="bi bi-people-fill"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Eventos</span>
                    <span class="info-box-number">41,410</span>
                </div>
            </div>
            <!--end::Info Box-->
            
            <!--begin::Info Box-->
            <div class="info-box">
                <span class="info-box-icon text-bg-danger"><i class="bi bi-cloud-download-fill"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Descargas</span>
                    <span class="info-box-number">114,381</span>
                </div>
            </div>
            <!--end::Info Box-->
            
            <!--begin::Progress Bars-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Progreso del Navegador</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            Chrome
                            <div class="progress progress-xs">
                                <div class="progress-bar text-bg-danger" style="width: 89%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <span class="badge text-bg-danger">89%</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            IE
                            <div class="progress progress-xs">
                                <div class="progress-bar text-bg-success" style="width: 57%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <span class="badge text-bg-success">57%</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            Firefox
                            <div class="progress progress-xs">
                                <div class="progress-bar text-bg-warning" style="width: 47%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <span class="badge text-bg-warning">47%</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            Safari
                            <div class="progress progress-xs">
                                <div class="progress-bar text-bg-info" style="width: 28%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <span class="badge text-bg-info">28%</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            Opera
                            <div class="progress progress-xs">
                                <div class="progress-bar text-bg-primary" style="width: 19%"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <span class="badge text-bg-primary">19%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Progress Bars-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
@endsection

@section('css')
    <!-- Estilos CSS personalizados para esta vista -->
    <style>
        .small-box-icon {
            font-size: 2rem;
        }
        .progress-xs {
            height: 0.25rem;
        }
        .description-block {
            padding: 15px 0;
        }
        .description-header {
            font-size: 1.1rem;
            margin: 0;
        }
        .description-text {
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 600;
        }
        .description-percentage {
            font-size: 0.875rem;
            font-weight: 600;
        }
    </style>
@endsection

@section('js')
    <!-- Scripts JavaScript personalizados para esta vista -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulación de actualización en tiempo real de las estadísticas
            console.log('Dashboard cargado correctamente');
            
            // Aquí se pueden agregar funcionalidades como:
            // - Actualización automática de estadísticas
            // - Gráficos con Chart.js
            // - Notificaciones en tiempo real
            // - etc.
        });
    </script>
@endsection