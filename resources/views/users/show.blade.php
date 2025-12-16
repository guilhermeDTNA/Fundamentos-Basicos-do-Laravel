@extends('layouts.app')

@section('pagetitle', 'Dados do usuário')

@section('main')
<h1>Mostrar usuário {{ $user->name }}</h1>

@php
$isAdmin = $user->id === 1;

@endphp

@if($isAdmin)
<p>Admin User</p>

@else
<p>Regular User</p>
@endif


@endsection