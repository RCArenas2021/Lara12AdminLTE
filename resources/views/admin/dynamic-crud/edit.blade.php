{{-- Formulario para editar registros dinámicos --}}
@extends('layouts.adminlte')
@section('title', 'Editar en ' . $table)
@section('content_header')
    Editar registro
@endsection
@section('content')
    <form action="{{ route('admin.dynamic-crud.update', [$table, $row->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @foreach($columns as $col)
            @if($col === 'id')
                @continue
            @endif
            <div class="mb-3">
                <label class="form-label">{{ $col }}</label>
                <input type="text" name="{{ $col }}" class="form-control" value="{{ $row->$col }}">
            </div>
        @endforeach
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
@endsection
