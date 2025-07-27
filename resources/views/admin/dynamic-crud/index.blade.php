{{-- Vista de listado de tablas para CRUD dinámico --}}
@extends('layouts.adminlte')
@section('title', 'Tablas disponibles')
@section('content_header')
    Listado de tablas
@endsection
@section('content')
    <ul>
        @foreach($tables as $tbl)
            <li><a href="{{ route('admin.dynamic-crud.show', $tbl) }}">{{ $tbl }}</a></li>
        @endforeach
    </ul>
@endsection
