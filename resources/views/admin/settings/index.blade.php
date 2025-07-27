@extends('layouts.adminlte')
@section('title', 'Configuraciones')
@section('content_header')
    Configuración general
@endsection
@section('content')
    <form action="{{ route('admin.settings.general.update') }}" method="POST" class="w-50">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre del sitio</label>
            <input type="text" name="site_name" class="form-control" value="{{ $settings['site_name'] ?? '' }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Modo mantenimiento</label>
            <select name="maintenance_mode" class="form-select">
                <option value="off" {{ ($settings['maintenance_mode'] ?? 'off') == 'off' ? 'selected' : '' }}>Off</option>
                <option value="on" {{ ($settings['maintenance_mode'] ?? '') == 'on' ? 'selected' : '' }}>On</option>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
    @if(session('status'))
        <div class="alert alert-success mt-3">{{ session('status') }}</div>
    @endif
@endsection
