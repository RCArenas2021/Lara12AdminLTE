@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container py-4">
    <h1 class="mb-3">Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
</div>
@endsection
