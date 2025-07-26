{{-- Tercera vista del dashboard (v3) --}}
{{-- Última modificación: 26-07-2025 por ChatGPT --}}
@extends('layouts.adminlte')

@section('title', 'Dashboard V3')

@section('content_header')
    Dashboard versión 3
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Dashboard v3</li>
@endsection

@section('content')
    <p>Contenido de la tercera versión del dashboard.</p>
@endsection
