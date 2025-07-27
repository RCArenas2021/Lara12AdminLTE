@extends('layouts.adminlte')

@section('title', 'Editar Usuario')

@section('content_header')
    Editar usuario
@endsection

@section('content')
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña (dejar en blanco para no cambiar)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Rol</label>
            <select name="role" class="form-select" required>
                @foreach($roles as $id => $name)
                    <option value="{{ $name }}" @selected($user->roles->pluck('name')->contains($name))>{{ $name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection

