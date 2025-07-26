@extends('layouts.adminlte')

@section('title', 'Editar Usuario')

@section('content_header')
    Editar usuario
@endsection

@section('content')
    <p>Formulario para editar al usuario {{ $user->name ?? 'N/A' }}.</p>
@endsection

