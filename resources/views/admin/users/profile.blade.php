@extends('layouts.adminlte')
@section('title', 'User Profile')
@section('content')
<div class="p-3">
    <h1>User Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
</div>
@endsection
