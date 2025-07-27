@extends('layouts.adminlte')
@section('title', 'Crear Usuario')
@section('content_header')
    Nuevo usuario
@endsection
@section('content')
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Rol</label>
            <select name="role" class="form-select" required>
                @foreach($roles as $id => $name)
                    <option value="{{ $name }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
