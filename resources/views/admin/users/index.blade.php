@extends('layouts.adminlte')
@section('title', 'Usuarios')
@section('content_header')
    Lista de usuarios
@endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
