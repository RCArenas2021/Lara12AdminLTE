@extends('layouts.adminlte')
@section('title','Bitácora')
@section('content_header')
    Registros de actividad
@endsection
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Método</th>
            <th>URL</th>
            <th>IP</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($logs as $log)
        <tr>
            <td>{{ $log->id }}</td>
            <td>{{ $log->user->name ?? 'N/A' }}</td>
            <td>{{ $log->method }}</td>
            <td>{{ $log->url }}</td>
            <td>{{ $log->ip_address }}</td>
            <td>{{ $log->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $logs->links() }}
@endsection
