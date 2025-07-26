{{-- Vista alternativa del dashboard (v2) --}}
{{-- Última modificación: 26-07-2025 por ChatGPT --}}
@extends('layouts.adminlte')

@section('title', 'Dashboard V2')

@section('content_header')
    Dashboard versión 2
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Dashboard v2</li>
@endsection

@section('content')
    <p>Contenido de la segunda versión del dashboard.</p>
@endsection
