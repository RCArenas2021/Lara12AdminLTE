@extends('layouts.adminlte')

@section('title', 'Detalle Usuario')

@section('content_header')
    Detalle de usuario
@endsection

@section('content')
    <ul>
        <li><strong>Nombre:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Rol:</strong> {{ $user->roles->pluck('name')->implode(', ') }}</li>
    </ul>
@endsection

