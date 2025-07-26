{{-- Detalle de usuario --}}
{{-- Última modificación: 26-07-2025 por ChatGPT --}}
@extends('layouts.adminlte')

@section('title', 'Detalle Usuario')

@section('content_header')
    Detalle de usuario
@endsection

@section('content')
    <p>Detalle del usuario: {{ $user->name ?? 'N/A' }}.</p>
@endsection

