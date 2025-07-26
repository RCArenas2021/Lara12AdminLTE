{{-- Formulario para editar usuario --}}
{{-- Última modificación: 26-07-2025 por ChatGPT --}}
@extends('layouts.adminlte')

@section('title', 'Editar Usuario')

@section('content_header')
    Editar usuario
@endsection

@section('content')
    <p>Formulario para editar al usuario {{ $user->name ?? 'N/A' }}.</p>
@endsection

