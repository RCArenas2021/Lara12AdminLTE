{{-- Vista de filas de una tabla con opciones CRUD --}}
@extends('layouts.adminlte')
@section('title', 'Tabla ' . $table)
@section('content_header')
    Gestion de {{ $table }}
@endsection
@section('content')
    <a href="{{ route('admin.dynamic-crud.create', $table) }}" class="btn btn-primary">Crear</a>
    <table class="table table-striped mt-2">
        <thead>
            <tr>
                @foreach($columns as $col)
                    <th>{{ $col }}</th>
                @endforeach
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
                <tr>
                    @foreach($columns as $col)
                        <td>{{ $row->$col }}</td>
                    @endforeach
                    <td>
                        <a href="{{ route('admin.dynamic-crud.edit', [$table, $row->id]) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('admin.dynamic-crud.destroy', [$table, $row->id]) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $rows->links() }}
@endsection
