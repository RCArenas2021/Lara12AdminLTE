{{-- Formulario para crear registros dinámicos --}}
@extends('layouts.adminlte')
@section('title', 'Crear en ' . $table)
@section('content_header')
    Nuevo registro en {{ $table }}
@endsection
@section('content')
    <form action="{{ route('admin.dynamic-crud.store', $table) }}" method="POST">
        @csrf
        @foreach($columns as $col)
            @if($col === 'id')
                @continue
            @endif
            <div class="mb-3">
                <label class="form-label">{{ $col }}</label>
                <input type="text" name="{{ $col }}" class="form-control">
            </div>
        @endforeach
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection
