@extends('layouts.adminlte')

@section('title', 'Detalle Usuario')

@section('content_header')
    Detalle de usuario
@endsection

@section('content')
    <p>Detalle del usuario: {{ $user->name ?? 'N/A' }}.</p>
@endsection

